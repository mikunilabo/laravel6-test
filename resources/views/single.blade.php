@extends ('layouts.test')

@section ('content')
    <div class="card">
        <div class="background_test" style="background: linear-gradient(135deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);">
            <div class="words_test">
                漢字漢字漢字
            </div>
        </div>
@if (false)
          <img class="card-img-top" src="https://photos-2.dropbox.com/t/2/AABGCdB59PCRUg6LxDEw0fy5cW7aC1mJ9VxGUSzKmNo9YQ/12/78400833/jpeg/32x32/1/_/1/2/640x360.jpg/EIiY6zwYz6YTIAcoBw/hSaVqeKXMgcAX6NyC5zeCBLqq7R8l1q8BIiiKqI2_ZI?size=800x600&amp;size_mode=3" alt="Card image cap">
@endif
          <div class="card-body">
              <div class="title">
                <h3>「漢字」の読み</h3>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <span class="label label-default">Default</span>
                    <span class="label label-primary">Primary</span>
                    <span class="label label-info">Info</span>
                    <span class="label label-success">Success</span>
                    <span class="label label-warning">Warning</span>
                    <span class="label label-danger">Danger</span>
                  </div>
                  <div class="col-md-6">
                    <p>みんなの正解率 <span class="text-success ">80</span>%</p>
                  </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"> Radio is off
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                    <div class="form-check-radio">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked> Radio is on
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-check-radio disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled> Disabled radio is off
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                    <div class="form-check-radio disabled">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="exampleRadioz" id="exampleRadios4" value="option4" checked disabled> Disabled radio is on
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </div>
              </div>
              <div class="row mb-5">
                  <div class="col-md-12">
                    <div class="nav-tabs-navigation">
                      <div class="nav-tabs-wrapper">
                        <ul id="tabs" class="nav nav-tabs" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">ヒント</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">意味</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#messages" role="tab">その他</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div id="my-tab-content" class="tab-content text-center">
                      <div class="tab-pane active" id="home" role="tabpanel">
                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. With a smooth metal surface that seamlessly meets the new Retina HD display.</p>
                      </div>
                      <div class="tab-pane" id="profile" role="tabpanel">
                        <p>Here is your profile.</p>
                      </div>
                      <div class="tab-pane" id="messages" role="tabpanel">
                        <p>Here are your messages.</p>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>

      @component ('layouts.ads') @endcomponent

      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Card title</h4>
                      <p class="card-text">TODO：各ページへシェアボタン設置</p>
                  </div>
              </div>
          </div>
      </div>

      <div class="title">
        <h3>同一カテゴリ・タグ内その他一覧</h3>
      </div>
      <div class="row">
          @for ($i=0; $i<9; $i++)
              <div class="col-md-4">
                  <div class="card">
                      <div class="background_test_mini" style="background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);">
                          <div class="words_test_mini">
                              漢字漢字漢字
                          </div>
                      </div>
                      <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">同一カテゴリ・タグ内その他一覧</p>
                      </div>
                  </div>
              </div>
          @endfor
      </div>

      @component ('layouts.ads') @endcomponent

      <div class="title">
        <h3>最新、もしくはランダム一覧</h3>
      </div>
      <div class="row">
          @for ($i=0; $i<9; $i++)
              <div class="col-md-4">
                  <div class="card">
                      <div class="background_test_mini" style="background: linear-gradient(135deg, #d9afd9 0%, #97d9e1 100%);">
                          <div class="words_test_mini">
                              漢字漢字漢字
                          </div>
                      </div>
                      <div class="card-body">
                          <h4 class="card-title">Card title</h4>
                          <p class="card-text">最新、もしくはランダム一覧</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                  </div>
              </div>
          @endfor
      </div>

      @component ('layouts.ads') @endcomponent
@endsection
