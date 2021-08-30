@extends('layouts.homepage')

@section('main')
        @include('home/main-carousel')
        @include('home/main-produk')
        <div class="container" style="padding-top: 3em; padding-bottom: 3em;">
            <div class="col-md-9 animate-box fadeInUp animated-fast">
                @include('home/artikel')
            </div>
            <div class="col-md-1 animate-box fadeInUp animated-fast"></div>
            <div class="col-md-2 animate-box fadeInUp animated-fast" style="padding-top: 10px; padding-left: 30px; padding-bottom: 30px; float: right;">
                @include('home/kegiatan')
            </div>
        </div>
        @include('home/main-info')
        @include('home/main-achieve')
@endsection
   <!--  <div class="modal fade" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Hadir Bermanfaat Untuk Para APIP</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div> /.modal-content
        </div> /.modal-dialog
    </div> /.modal -->

