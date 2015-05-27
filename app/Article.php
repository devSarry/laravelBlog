<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model {

    protected $fillable = [
        'title',
        'author',
        'body',
        'created_at',
        'updated_at',
        'published_at'
    ];

    /**
     *      Mutatior
     * This gives us a way to manipulate data before it goes into our DB.
     *
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);


    }

    public function setSummeryAttribute($body)
    {
        $this->attributes['summery'] = Str::words($body, 10);
    }

    /**
     *      Scope
     *
     * This gives us a way to manipulate our results before we pass it to our
     * views.
     *
     * The naming convention used by laravel is to use the word "scope" and
     * then the method name.
     *
     * This allows us to add more to our query before firing it off.
     *
     * @param $query
     */
    public function scopeAllReadyPublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * We want to return the user that the article belongs to.
     * Or who WROTE the article.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}


