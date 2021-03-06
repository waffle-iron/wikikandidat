@extends('layouts.app')

@section('title')
DKI Jakarta - Pilkada 2017 
@endsection

@section('head')
<style type="text/css">
  /* bootstrap manipulation */
  .panel-body {
    background-color: rgba(240,240,240,1);
  }
  .panel{
    border: none;
  }
  .panel ol,ul{
    list-style-position: inside;
    padding-left:0;
  }
  /* self-made */
  .panel-body > .head{
    text-align: center
  }
  .panel-body > .head > img{
    width: 100%;
  }
  .panel-body > .data{
    border-bottom: 1px solid #cacaca;
    padding: 2px 5px;
    margin-bottom: 5px; 
  }
  .data.first{
    border-top: 1px solid #cacaca;
  }
  .panel-body .corner-btn{
    margin-top: 3px;
    padding-left: 0.5em;
    padding-right: 0.5em;
    margin-left: 5px; 
    cursor: pointer;
  }
  .panel-body .corner-date{
    margin-left:-7px;
  }
  .panel-body > h5{
    color: #008cba;
    font-weight: bold;
    margin-top: 0;
  }
  .panel-body > .pull-right.glyphicon-plus{
    font-size: 20px;
    margin-top: -5px;
    font-weight: bold;
    cursor: pointer;
  }
  .random-quote{
    max-width: 300px;
    margin-top: 25px;
    text-align: right;
  }
  .well > img{
    width: 100%;
  }
</style>
@endsection

@section('content')
    <div class="container">
      <span class="pull-right random-quote"><em>"Demokrasi tidak bisa hanya berisi pemilu, yang hampir selalu fiktif dan diatur oleh tuan tanah serta politisi profesional."<br>~ Che Guavara</em></span>
      <h1>Pilkada 2017</h1>
      <div class="btn-group">
        <a href="#" class="btn btn-default btn-lg">Provinsi</a>
        <a href="#" class="btn btn-default btn-lg dropdown-toggle " data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="pilkada-2017-aceh">Aceh</a></li>
          <li><a href="pilkada-2017-jakarta">DKI Jakarta</a></li>
          <li><a href="pilkada-2017-banten">Banten</a></li>
          <li><a href="pilkada-2017-sulbar">Sulawesi Barat</a></li>
          <li><a href="pilkada-2017-babel">Bangka Belitung</a></li>
        </ul>
      </div>
      <div class="btn-group">
        <a href="#" class="btn btn-default btn-lg">Kota/Kab</a>
        <a href="#" class="btn btn-default btn-lg dropdown-toggle " data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
        <ul class="dropdown-menu">
        </ul>
      </div>
      <hr>
      <div class="row">
        <?php
          $types =  App\Type::all();
        ?>
        @foreach($election->couples as $co)
          <?php 
            $c = App\Candidate::find($co->candidate_id);
            $rm = App\Candidate::find($co->running_mate_id);
          ?>
        <div class="col-md-4">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#primary-tab-{{$co->id}}" class="btn-md" data-toggle="tab" aria-expanded="true">{{$c->nickname}}</a></li>
            <li class=""><a href="#vice-tab-{{$co->id}}" class="btn-md" data-toggle="tab" aria-expanded="false">{{$rm->nickname}}</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade active in" id="primary-tab-{{$co->id}}">
            
              <div class="panel panel-default" >
                <div class="panel-body">
                  <div class="head">
                    <img src="{{$c->photo_url}}" alt="">
                    <h3><strong>{{$c->name}}</strong></h3>
                  </div>
                </div>
              </div>

              @include('layouts.fact-panel', [
                'category' => 'Careers',
                'name' => 'Karir',
                'color' => 'rgb(235, 244, 255)',
                'candidate' => $c])

              @include('layouts.fact-panel', [
                'category' => 'Educations',
                'name' => 'Pendidikan',
                'color' => 'rgb(235, 255, 245)',
                'candidate' => $c])

              @include('layouts.fact-panel', [
                'category' => 'Contributions',
                'name' => 'Kontribusi ke Organisasi',
                'color' => 'rgb(255, 235, 235)',
                'candidate' => $c])

              @include('layouts.fact-panel', [
                'category' => 'Achievements',
                'name' => 'Prestasi',
                'color' => 'rgb(235, 236, 255)',
                'candidate' => $c])

              @include('layouts.fact-panel', [
                'category' => 'Controversies',
                'name' => 'Kontroversi',
                'color' => 'rgb(255, 251, 235)',
                'candidate' => $c])

            </div>

            <div class="tab-pane fade" id="vice-tab-{{$co->id}}">

              <div class="panel panel-default" >
                <div class="panel-body">
                  <div class="head">
                    <img src="{{$rm->photo_url}}" alt="">
                    <h3><strong>{{$rm->name}}</strong></h3>
                  </div>
                </div>
              </div>

              @include('layouts.fact-panel', [
                'category' => 'Careers',
                'name' => 'Karir',
                'color' => 'rgb(235, 244, 255)',
                'candidate' => $rm])

              @include('layouts.fact-panel', [
                'category' => 'Educations',
                'name' => 'Pendidikan',
                'color' => 'rgb(235, 255, 245)',
                'candidate' => $rm])

              @include('layouts.fact-panel', [
                'category' => 'Contributions',
                'name' => 'Kontribusi ke Organisasi',
                'color' => 'rgb(255, 235, 235)',
                'candidate' => $rm])

              @include('layouts.fact-panel', [
                'category' => 'Achievements',
                'name' => 'Prestasi',
                'color' => 'rgb(235, 236, 255)',
                'candidate' => $rm])

              @include('layouts.fact-panel', [
                'category' => 'Controversies',
                'name' => 'Kontroversi',
                'color' => 'rgb(255, 251, 235)',
                'candidate' => $rm])

            </div>
          </div>

  <!--        <h5>Testimoni:</h5>
              <div class="fb-comments" data-href="https://wikikandidat.com/{{$c->urlname}}" data-width="335" data-numposts="5"></div> -->
        </div>
    
        <?php
          $facts = $c->facts;
          $facts = $facts->merge($rm->facts);
        ?>

        @foreach($facts as $f)
          <div class="modal fade" id="modal-{{$f->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Riwayat Perubahan dari...</h4>
                  <div class="bs-callout bs-callout-default">
                    {!!markdown($f->text)!!}
                  </div>
                </div>
                <div class="modal-body">
                  @foreach($f->submissions as $s)
                    @if($s->is_rejected == 0)
                      <?php $datetime = new DateTime($s->created_at); ?>
                      <p>
                        <img style="display: inline;" class="media-object" src="https://www.gravatar.com/avatar/{{md5( strtolower( trim( $s->submitter->email ) ) )}}?s=20"> {{$datetime->format('j M Y, H:i')}}, {{$s->submitter->name}}
                        @if($loop->first)
                          memasukan informasi berikut ke Wikikandidat
                        @else
                          menambahkan informasi berikut ke fakta ini.
                        @endif
                      </p>
                      <div  class="well well-sm"
                            style="background-color: rgb(235, 255, 245);">
                        "{{$s->text}}"
                      </div>
                      @foreach($s->edits as $e)
                        <?php $datetime = new DateTime($e->created_at); ?>
                        <p>
                          {{$datetime->format('j M Y, H:i')}}, {{$e->verifier->name}} merespon, "{{$e->comment}}". Teks fakta dia edit menjadi seperti ini:
                        </p>
                        <div class="bs-callout bs-callout-default">
                            {!!markdown($e->text)!!}
                        </div>
                         @if ($loop->last)
                          <p>
                            Versi di atas, terpublikasi sebagai fakta {{$c->nickname}} pada {{$datetime->format('j M Y, H:i')}}.
                          </p>
                          <hr>
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="EditFactModal-{{$f->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Edit Fakta</h4>
                  <div class="bs-callout bs-callout-default">
                    {!!markdown($f->text)!!}
                  </div>
                </div>
                <div class="modal-body">
                  @if(Auth::check())
                    <?php
                      $submissions = App\Submission::where([
                          ['fact_id', '=', $f->id],
                          ['is_rejected', '=', null]
                        ])->get();
                    ?>
                    @if($submissions->count() == 0)
                      <form method="POST" action="user/process_edit_fact_submission">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label>Jelaskan apa yang ingin ditambah/dikurangi/diubah di teks fakta di atas. Setiap saran perubahaan harus ditunjang bukti asli. Taruh ke link internet yang merujuk ke bukti tersebut.</label>
                          <textarea class="form-control" name="text" id="" rows="3"></textarea>
                        </div>
                        <input type="hidden" name="fact_id" value="{{$f->id}}">
                        <input type="hidden" name="type_id" value="{{$f->type_id}}">
                        <input type="hidden" name="candidate_id" value="{{$f->candidate_id}}">
                        <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                    @else
                      <p>
                        Mohon maaf. Sekarang kamu harus mengantri. Karena ada sebuah masukan yang sedang diproses tiga mahasiswa acak. Takutnya bentrok kalau diproses bersamaan.
                      </p>
                      <p>
                        Nanti akan dibuat fitur, yang akan mengirim email ke kamu kalau proses sudah selesai. Jadi kamu sudah bisa tambahkan bukti baru yang melengkapi fakta ini. Sekarang fiturnya belum jadi. Kamu rajin-rajin cek halaman ini dulu aja ya.. :)
                      </p>
                    @endif
                  @else
                    Login dahulu untuk memasukan fakta baru. Kalau ingin anonimus karena faktanya terlalu sensitif, ikuti petunjuk berikut. 
                  @endif
                </div>
              </div>
            </div>
          </div>
        @endforeach

        @endforeach
        
      </div>
    </div>

    <div class="modal fade" id="SubmitFactModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" >Tambah Fakta <span id="type"></span> <span id="nickname"></span></h4>
          </div>
          <div class="modal-body">
            @if(Auth::check())
              <form method="POST" action="user/process_new_fact_submission">
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Silahkan masukan fakta baru, jangan lupa, harus ditunjang bukti asli. Taruh ke link internet.</label>
                  <textarea class="form-control" name="text" id="" rows="3"></textarea>
                </div>
                <input type="hidden" name="type_id" value="">
                <input type="hidden" name="candidate_id" value="">
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            @else
            Login dahulu untuk memasukan fakta baru. Kalau ingin anonimus karena faktanya terlalu sensitif, ikuti petunjuk berikut. 
            @endif
          </div>
        </div>
      </div>
    </div>
@endsection

@section('js')
    <script>
      $(document).ready(function(){
        $('.panel-body > .pull-right.glyphicon-plus').click(function (e) {
          $("#SubmitFactModal input[name='eternal_url']").val("");
          $("#SubmitFactModal input[name='text']").val("");
          $("#SubmitFactModal input[name='type_id']").val( $(this).data("fact-type") );
          $("#SubmitFactModal input[name='candidate_id']").val( $(this).data("candidate") );
          $("#SubmitFactModal span#nickname").html( $(this).data("nickname") );
          $("#SubmitFactModal span#type").html( $(this).data("fact-type-name") );
        });
        
        $(".div-replace-reference").hide();
        $('.toggle-replace-reference').click(function(){
          $('#replaceReference-'+$(this).data('id') ).slideToggle("slow");
        });
      });
    </script>
@endsection