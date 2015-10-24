
    <div class="wrapper">

        <div class="content">
          
          <div id="body">
            <h3 id="heading">Get better at your favorite programming language today!</h3>
            @foreach($videos as $video)
              <div class="video_pane">
              <iframe src="{{ $video->url }}" class="v-frame" width="300" height="200"></iframe>
              <div class="video_info">
              <button class="text-center btn watch pull-right"><a href="video/{{ $video->id }}">Watch</a></button>

                <span class="description">

                  <p class="title"><span class="title">{{ substr($video->title, 0, 20) }}</span></p>
                                    <span class="description"> {{ $video->description }} </span>
                  <span class="delete">x</span> 
                </span>
              </div>
            </div>
            @endforeach
          
                       
          </div>
          
          <footer>
            
          </footer>
        </div>
    </div>
  </body>
</html>
