@extends('main')
@section('content')
@section('title','| اتصل بنا')
  <div class="row">
<div class="col-md-12">
  Contact Me
  <hr>
  <form>
    <div class="form-group">
      <label name="email">Email</label>
      <input name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
      <label name="email">Subject</label>
      <input name="subject" id="subject" class="form-control">
    </div>
    <div class="form-group">
      <label name="message">Message</label>
      <textarea name="message" id="message" class="form-control">Type your message here ....</textarea> 
    </div>
    <input type="submit" value="Send Message" class="btn btn-success"> 
  </form>

  
</div>
  </div><!-- end row -->
  @endsection