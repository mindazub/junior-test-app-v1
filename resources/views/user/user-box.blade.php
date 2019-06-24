

<div class="row">

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>{{ $user->name }}</h3>

                <p>{{ $user->email }}</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('user.index', app()->getLocale()) }}" class="small-box-footer">All Users <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->


</div>
