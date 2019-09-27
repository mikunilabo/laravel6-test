@component ('layouts.ads') @endcomponent

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <p class="card-text">TODO：サイドバーかグローバルナビへ検索バー設置したい</p>
            </div>
        </div>
    </div>

    @for ($i=0; $i<10; $i++)
        <div class="col-md-12">
            <div class="card">
                @if (false)
                    <img class="card-img-top" src="https://photos-2.dropbox.com/t/2/AABGCdB59PCRUg6LxDEw0fy5cW7aC1mJ9VxGUSzKmNo9YQ/12/78400833/jpeg/32x32/1/_/1/2/640x360.jpg/EIiY6zwYz6YTIAcoBw/hSaVqeKXMgcAX6NyC5zeCBLqq7R8l1q8BIiiKqI2_ZI?size=800x600&amp;size_mode=3" alt="Card image cap">
                @endif

                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">サイドバーコンテンツ</p>
                </div>
            </div>
        </div>
    @endfor
</div>
