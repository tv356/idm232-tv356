<div class="wrapper__header header">
    @include('layout.menumobile')
    <div class="container">
        <div class="row header__flex">
            <div class="header_left col-lg-3 col-sm-12 col-md-12 col-xl-3">
                <div class="menu-md-header">
                    <i class="fas fa-ellipsis-v"></i>
                </div>
                <div class="logo">
                    @if($about!=null)
                    <img src="upload/logo/{{$about->logo}}" alt="">
                    @endif
                </div>
                <div class="form-md-header">
                    <form action="/search" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <span class="btn display__form display__form__mobile text-white">
                            <i class="fas fa-search">
                           
                            </i>
                        </span>
                        <div class="input__search">
                            <input type="text" name="KeyWord" placeholder="Searching...">
                            <button class="btn" type="submit"><i
                                    class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</div>