@extends('base')


<header>
    @include('layout.navbar')
</header>

@section('content')
<br><br>

<div class="row ">
<div class="col-md-6 offset-md-4">    
    <div class="card border-success mb-3" style="max-width: 25rem;">
            <div class="card-header bg-transparent border-success text-center fs-2" style="font-family: Garamond, serif; font-size:40px;>Send Your Email Here</div>
                <div class="card-body ">

                            <form action="{{url('/send-mail')}}" method="post">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label for="content">
                                            Message:</label>
                                        <textarea class="form-control" type="textarea" name="content" id="content" maxlength="6000" rows="7"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label for="email">
                                            Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>

                                <div class="col-sm-6 form-group">
                                    <label for="subject">
                                        Subject:</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div><br><br><br>
                                        <button type="submit" class="btn btn-primary pull-right margin-top:15px;" >Send →</button>
                                
                    


                            </form>
                </div>            
            </div>
        </div>
</div>
</div>
@stop