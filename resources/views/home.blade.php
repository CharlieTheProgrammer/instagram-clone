@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mt-4" style="max-width: 935px;">

        <div id="feed" style="max-width: 736px;">
            <div class="card mb-5">
                <div class="d-flex p-2 border border-bottom">
                    <div> <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 30px; width: 30px;"></div>
                    <div class="ml-2"><small><a href="http://">instagram.user</a></small></div>
                    <div class="ml-auto">...</div>
                </div>
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

            <div class="card mb-5">
                <div class="d-flex p-2 border border-bottom">
                    <div> <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 30px; width: 30px;"></div>
                    <div class="ml-2"><small><a href="http://">instagram.user</a></small></div>
                    <div class="ml-auto">...</div>
                </div>
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>

        </div>

        <div id="spacer-column" style="width: 24px;"></div>

        <div id="control-panel" style="min-width: 250px">
            <div id="profile" class="mb-3 d-flex align-items-center">
                <div id="user-img">
                    <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 50px; width: 50px;">
                </div>
                <div class="pl-3">
                    <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                    <div id="user-full-name" class="text-secondary"><small>Instagram User</small></div>
                </div>
            </div>


            <div id="stories-container" class="card" style="max-height: 230px;">
                <div class="card-body p-2" style="max-height: 230px;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-2 text-muted">Stories</h6>
                        <h6 class="mb-2">Watch All</h6>
                    </div>
                    <div id="stories" style="overflow:scroll" style="max-height: 230px;">

                        <div id="story" class="d-flex align-items-center">
                            <div id="user-img">
                                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 40px; width: 40px;">
                            </div>
                            <div class="pl-3">
                                <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                                <div id="time" class="text-secondary"><small>15 HOURS AGO</small></div>
                            </div>
                        </div>

                        <div id="story" class="d-flex align-items-center">
                            <div id="user-img">
                                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 40px; width: 40px;">
                            </div>
                            <div class="pl-3">
                                <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                                <div id="time" class="text-secondary"><small>15 HOURS AGO</small></div>
                            </div>
                        </div>

                        <div id="story" class="d-flex align-items-center">
                            <div id="user-img">
                                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 40px; width: 40px;">
                            </div>
                            <div class="pl-3">
                                <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                                <div id="time" class="text-secondary"><small>15 HOURS AGO</small></div>
                            </div>
                        </div>

                        <!-- <div id="story" class="d-flex align-items-center">
                            <div id="user-img">
                                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 40px; width: 40px;">
                            </div>
                            <div class="pl-3">
                                <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                                <div id="time" class="text-secondary"><small>15 HOURS AGO</small></div>
                            </div>
                        </div>

                        <div id="story" class="d-flex align-items-center">
                            <div id="user-img">
                                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 40px; width: 40px;">
                            </div>
                            <div class="pl-3">
                                <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                                <div id="time" class="text-secondary"><small>15 HOURS AGO</small></div>
                            </div>
                        </div>

                        <div id="story" class="d-flex align-items-center">
                            <div id="user-img">
                                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 40px; width: 40px;">
                            </div>
                            <div class="pl-3">
                                <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                                <div id="time" class="text-secondary"><small>15 HOURS AGO</small></div>
                            </div>
                        </div> -->

                    </div>

                </div>
            </div>

            <div id="suggestions-container" class="card my-3" style="max-height: 200px;">
                <div class="card-body p-2" style="max-height: 200px;">
                    <div class="d-flex align-items-center justify-content-between">
                        <h6 class="mb-2 text-muted">Suggestions For You</h6>
                        <h6 class="mb-2">See All</h6>
                    </div>
                    <div id="suggestions" style="" style="max-height: 200px;">
                        <div id="suggestion" class="d-flex align-items-center">
                            <div id="user-img">
                                <img src="https://scontent-dfw5-2.cdninstagram.com/vp/1159a03d5ff46bc9ee88ab2ae07055e1/5DE8C41F/t51.2885-19/s150x150/47691324_352744575288551_415039053637877760_n.jpg?_nc_ht=scontent-dfw5-2.cdninstagram.com" alt="User Profile Picture" class="rounded-circle" style="height: 40px; width: 40px;">
                            </div>
                            <div class="pl-3">
                                <div id="user-name" class="pb-0" style="font-weight: bold;"><small><a href="http://">instagram.user</a></small></div>
                                <div id="suggestion-message" class="text-secondary"><small>New to Insta; follows you</small></div>
                            </div>
                            <div class="ml-auto">
                                <a href=""><small>Follow</small></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="footer">
                <small>
                    <ul>
                        <li><a href="http://">About us</a></li>
                        <li><a href="http://">Support</a></li>
                        <li><a href="http://">Press</a></li>
                        <li><a href="http://">API</a></li>
                        <li><a href="http://">Jobs</a></li>
                        <li><a href="http://">Privacy</a></li>
                        <li><a href="http://">Terms</a></li>
                        <li><a href="http://">Directory</a></li>
                        <li><a href="http://">Profiles</a></li>
                        <li><a href="http://">Hashtags</a></li>
                        <li><a href="http://">LANGUAGE</a></li>
                    </ul>
                </small>
            </div>
        </div>
    </div>
</div>
@endsection