@extends('layouts.site')

@push('css')
    <style>
 .card {margin-top: 102px !important;border-radius: 0 !important;width: 20.5cm;height: 15cm;}.footer {margin-top: 10px;width: 100%;display: flex;justify-content: center;align-items: center;padding: 3.5px 0;background-color: #376b25;color: white;text-align: center;margin-bottom: 9px;}.footer h5 {text-transform: uppercase;font-weight: 700;font-size: 2.5rem;margin: 0;}.img-wrapper{margin-right: 5px;margin-top: 5px;}.container-fluid {margin: 102px 23px !important;padding: 0 !important;margin: 0 !important;}.name {padding: 13px 0;font-size: 35px;font-weight: 700;letter-spacing: 2;}.visitor-title {font-size: 35px;padding: 0;margin: 0;}.visitor-info {font-size: 25px;padding: 0;margin: 0;}.info {padding-left: 20px;margin-top: 50px;}.picture-wrapper {margin-top: 30px;margin-right: -10px;margin-left: 5px;}@media print {.card.container-fluid{transform: scale(0.48);margin: -3.6cm -5.12cm !important;position: relative;top: 0;left: 0;}}
    </style>
@endpush

@section('content')
@if($booking->invitations)
    @foreach($booking->invitations as $invitation)
        @if(isset($invitation->visitor_id))
        <div id="printidcard">
                <div class="container-fluid card">
        <div>
      <div class="row">
        <div class="col info">
            <h5 class="name">{{$invitation->visitor->name}}  {{$invitation->visitor->surname}}</h5>
          <h5 class="visitor-title">Department:</h5>
          <p class="visitor-info">Main Office</p>
          <h5 class="visitor-title">Host:</h5>
          <p class="visitor-info">{{$booking->host->name}}</p>
          <h5 class="visitor-title">Date Valid:</h5>
          <p class="visitor-info">{{ date("Y-m-d", strtotime($invitation->checkin_at))}} - {{  date("Y-m-d", strtotime($invitation->checkout_at))}}</p>
          <h5 class="visitor-title">Visitor ID:</h5>
          <p class="visitor-info">{{$invitation->booking->reg_no}}
            </p>
        </div>
          <div class="col-5 picture-wrapper m-auto">
          <img
            src="{{asset('logo.png')}}"
            width="95%"
            alt=""
          />
        </div>
      </div>
      <div class="footer">
        <h5>Visitor</h5>
      </div>
        </div>
    </div>
    </div>
        
        
        


                                            <div class="row justify-content-md-center">
                                                <div class="col-md-4">
                                                    <div style="margin-top: 10px;" class="justify-content-center">
                                                        <div class="btn-group btn-group-justified">
                                                            <a href="{{ route('check-in.step-three') }}" class="btn btn-primary">
                                                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                                                            </a>
                                                            @if($invitation->visitor)
                                                            <a href="{{ route('check-in.step-one') }}" class="btn btn-warning">
                                                                <i class="fa fa-edit" aria-hidden="true"></i> Edit
                                                            </a>
                                                            <a href="#" id="print" class="btn btn-success">
                                                                <i class="fa fa-print" aria-hidden="true"></i> Print Access
                                                            </a>
                                                            @endif
                                                            <a href="{{ route('check-in') }}" class="btn btn-primary ">
                                                                <i class="fa fa-home" aria-hidden="true"></i> Home
                                                            </a>
                                                            
                                                            <a href="https://opco.tdigital.dev/app/checkin/1" target="_blank" class="btn btn-primary ">
                                                                <i class="fa fa-home" aria-hidden="true"></i> Covid Check
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

        @endif
    @endforeach
@else
    <div>
        <p align="center" style="color: red">ID Not Available</p>
    </div>
@endif
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"
></script>
</body>
</html>

@stop
@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA==" crossorigin="anonymous"></script>
    
        <script>
    
    
    $(function() { 
    $("#print").click(function() { 
            var divContents = document.getElementById("printidcard").innerHTML; 
            var a = window.open(); 
            a.document.write('<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><linkhref="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"crossorigin="anonymous"/>');
            a.document.write('<style> .card {margin-top: 102px !important;border-radius: 0 !important;width: 20.5cm;height: 15cm;}.footer {margin-top: 10px;width: 100%;display: flex;justify-content: center;align-items: center;padding: 3.5px 0;background-color: #376b25;color: white;text-align: center;margin-bottom: 9px;}.footer h5 {text-transform: uppercase;font-weight: 700;font-size: 2.5rem;margin: 0;}.img-wrapper{margin-right: 5px;margin-top: 5px;}.container-fluid {margin: 102px 23px !important;padding: 0 !important;margin: 0 !important;}.name {padding: 13px 0;font-size: 35px;font-weight: 700;letter-spacing: 2;}.visitor-title {font-size: 35px;padding: 0;margin: 0;}.visitor-info {font-size: 25px;padding: 0;margin: 0;}.info {padding-left: 20px;margin-top: 50px;}.picture-wrapper {margin-top: 30px;margin-right: -10px;margin-left: 5px;}@media print {.card.container-fluid{transform: scale(0.48);margin: -3.6cm -5.12cm !important;position: relative;top: 0;left: 0;}}</style>');
             a.document.write('<body>');
            a.document.write(divContents); 
            a.document.write('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"crossorigin="anonymous"><\/script><\/body><\/html>'); 
            a.document.close(); 
            a.print(); 
    });
});
    
    </script>
    @stop



