@extends('layout.master')
@section('title','Update')
<body>

    <form method="post" action="/update">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        @foreach ($users as $user)
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name:</label><br /><br />
                <input type="text" class="form-control" value="{{ $user->first_name }}"
                    name="first_name" /><br /><br />
            </div>
            <div class="form-group">
                <label for="first_name">Last Name:</label><br /><br />
                <input type="text" class="form-control" value="{{ $user->last_name }}" name="last_name" /><br /><br />
            </div>
            <div class="form-group">
                <label for="gender"> Select you gender:</label><br /><br />

                <!-- <label for="gender">Gender:</label><br/><br/>   -->
                <select name="gender">
                    
                    @foreach ($leave_applicable_genders as $k => $leave_applicable_gender)
                    
                        <option value="{{ $k }}" @if ($user->gender == $k) selected @endif>{{ $leave_applicable_gender }}
                        </option>
                    @endforeach
                   
                    
                </select>
            </div>
            <div class="form-group">
                <label for="qualifications">Qualifications:</label><br /><br />
                <input type="text" class="form-control" value="{{ $user->qualifications }}"
                    name="qualifications" /><br /><br />
            </div>
            <br />
            <input type="submit" value="Update">
        @endforeach
    </form>
</body>

</html>
