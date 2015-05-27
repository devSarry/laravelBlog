
    <!--Title Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('title', 'Title: ') !!}
        {!! Form::text('title',null, ['class' => 'form-control']) !!}
    </div>

    <!--Author Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('author', 'Author: ') !!}
        {!! Form::text('author',null, ['class' => 'form-control']) !!}
    </div>

    <!--Article Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('body', 'Article: ') !!}
        {!! Form::textarea('body',null, ['class' => 'form-control']) !!}
    </div>

    <!--Image Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('image', 'Image: ') !!}
        {!! Form::file('image',null, ['class' => 'form-control']) !!}
    </div>

    <!--Published Date Field
        Form::text('name : String', 'default : String', params : array) -->
    <div class="form-group">
        {!! Form::label('published_at', 'Published On: ') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
    </div>

    <!--- Submit Button Field --->
    <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-default']) !!}
    </div>

{{--
   <div flow-init="{target: '/upload'}"
        flow-files-submitted="$flow.upload()"
        flow-file-success="$file.msg = $message">

     <input type="file" flow-btn/>
     Input OR Other element as upload button
     <span class="btn" flow-btn>Upload File</span>

     <table>
       <tr ng-repeat="file in $flow.files">
           <td>{{$index+1}}</td>
           <td>{{file.name}}</td>
           <td>{{file.msg}}</td>
       </tr>
     </table>
   </div>--}}
