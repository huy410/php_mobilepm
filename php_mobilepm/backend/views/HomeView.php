<!-- load file layout chung -->
<?php 
	$this->layoutPath = "layout.php";
 ?>

<section class="content">
            <!-- login-count -->
           <div class="cont-1">
            <div class="tile-stats" style="background: #3385ff">
                  <div class="icon"><i class="fa fa-5x fa-key"></i></div>
                  <div class="count"><h2>179</h2></div>
                  <h3>New Sign ups</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
            <div class="tile-stats" style="background: #70db70">
                  <div class="icon"><i class="fa  fa-5x fa-comments-o"></i></div>
                  <div class="count"><h2>179</h2></div>
                  <h3>New Comments</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
            <div class="tile-stats" style="background: #ffff33">
                  <div class="icon"><i class="fa fa-5x fa-caret-square-o-right"></i></div>
                  <div class="count"><h2>179</h2></div>
                  <h3>New Reviews</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
            <div class="tile-stats" style="background: #ff4d4d">
                  <div class="icon"><i class="fa  fa-5x fa-shopping-cart"></i></div>
                  <div class="count"><h2>179</h2></div>
                  <h3>New Orders</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
            <!-- /login -->
            <!-- chart -->
            <div class="chart">
                <h2>Thống kê</h2>
                <canvas id="bar-chart" width="800" height="450"></canvas>
                <script type="text/javascript">
                    // Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Android", "IOS", "MiUI", "ColorOS", "HydrogenOS"],
      datasets: [
        {
          label: "Devices (Thousands)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Mobile Sales (Thousands)'
      }
    }
});
                </script>
            </div>
            <!-- /chart -->
            <!-- n-v -->
            <div class="n-v">
                <h2>Nhân Viên</h2>
                <ul class="list-unstyled top_profiles scroll-view">
                          <li class="media event" >
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-4x fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event" >
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-4x fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-blue profile_thumb">
                              <i class="fa fa-4x fa-user blue"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                              <i class="fa fa-4x fa-user aero"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                          <li class="media event">
                            <a class="pull-left border-green profile_thumb">
                              <i class="fa fa-4x fa-user green"></i>
                            </a>
                            <div class="media-body">
                              <a class="title" href="#">Ms. Mary Jane</a>
                              <p><strong>$2300. </strong> Agent Avarage Sales </p>
                              <p> <small>12 Sales Today</small>
                              </p>
                            </div>
                          </li>
                        </ul>
            </div>
            <!-- /n-v -->
            <!-- new -->
            <div class="news">
                <div class="panel">
                <div class="panel-heading">
                <h1>Thông tin</h1></div>
                <div class="new-b">
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                </div>
                </div>
            </div>
            <div class="news">
                <div class="panel1">
                <div class="panel-heading">
                <h1>Tin tức</h1></div>
                <div class="new-b">
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                </div>
                </div>
            </div>
            <div class="news">
                <div class="panel2">
                <div class="panel-heading">
                <h1>Dữ liệu</h1></div>
                <div class="new-b">
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                <article class="a1">
                      <div class="n-i">
                        <a href=""><img src="assets/backend/layout1/images/mini.png"></a>
                      </div>
                      <div class="n-b">
                        <a class="title" href="#">Item One Title</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                </article>
                </div>
                </div>
            </div>
            <!-- /new -->
<!--  -->
        </section>