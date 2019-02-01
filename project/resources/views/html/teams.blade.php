
 @extends("layout.html");

  @section("title"," team page");


@section("Teams")
  <div id="team" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2>Meet the Team</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="asset/img/team/01.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>John Doe</h4>
            <p>Director</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="asset/img/team/02.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Mike Doe</h4>
            <p>Senior Designer</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="asset/img/team/03.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Jane Doe</h4>
            <p>Senior Designer</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="asset/img/team/04.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Karen Doe</h4>
            <p>Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  @endsection
