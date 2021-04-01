<?php
include_once('header.php');
?>
<?php include_once("slider.php");
?>

<!--frist card-->
<div class="container">

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Python.svg/1200px-Python.svg.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://www.erasmuslifebudapest.com/wp-content/uploads/2019/06/jhep-coursera-course4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="https://cdn.ourcodeworld.com/public-media/gallery/gallery-5c87e69233c64.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal
                        height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
    <!--send message tesst-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <!--end send message-->















    <!-- klinik rating star rating -->
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Augenklinik - Dr. Hoffmann</h5>
                    <star><span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </star>
                    <p class="card-text">Wolfenbütteler Str. 82
                        38102 Braunschweig
                        Niedersachsen</p>
                    <a href="./1.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">DIAKOVERE Friederikenstift</h5>
                    <star><span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </star>
                    <p class="card-text">
                        Humboldtstr. 5
                        30169 Hannover
                        Niedersachsen</p>
                    <a href="./6.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Krankenhaus Marienstift Braunschweig</h5>
                    <star><span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                    </star>
                    <p class="card-text">Helmstedter Straße 35
                        38102 Braunschweig
                        Niedersachsen</p>
                    <a href="./2.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">HELIOS Klinik Cuxhaven</h5>
                    <star><span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </star>
                    <p class="card-text">Altenwalder Chaussee 10
                        27474 Cuxhaven
                        Niedersachsen</p>
                    <a href="./16.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <!-- profiles-->
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card img-thumbnail">
                <img src="https://scontent-dus1-1.xx.fbcdn.net/v/t1.0-9/28959136_1660761134018305_6224671113973071872_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=QDIVuf5jWDgAX9xpmp4&_nc_ht=scontent-dus1-1.xx&oh=44fa1649eb957af2c181cc7873b9e57b&oe=60821FA0" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hamid</h5>
                    <p class="card-text">Ich bin Hamid von Refugeeks aus der Gruppe 4 Geeks.</p>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@Hamid">contact</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card img-thumbnail">
                <img src="https://aryanweb.com/wp-content/uploads/2020/11/hamed.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hamed</h5>
                    <p class="card-text">Ich bin Hamed von Refugeeks aus der Gruppe 4 Geeks.</p>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@Hamed">contact</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card img-thumbnail">
                <img src="images/mohamadalkadi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mohamad</h5>
                    <p class="card-text">Ich bin Mohamad von Refugeeks aus der Gruppe 4</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@anmar">contact</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card img-thumbnail">
                <img src="images/pp.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Anmar</h5>
                    <p class="card-text">Ich bin Anmar von Refugeeks aus der Gruppe 4 Geeks.</p>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mohammad">contact</button>
                </div>
            </div>
        </div>
    </div>
    <!--send message-->

    <?php
    include_once('footer.php');
    ?>