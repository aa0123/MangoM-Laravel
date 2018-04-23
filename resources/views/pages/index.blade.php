@extends('layouts.app')
@section('content')
<header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0">MyWeb</h1>
        <h2 class="masthead-subheading mb-0">Anime and Manga community!</h2>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
      </div>
    </div>
  </header>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 order-lg-2">
        <div class="p-5">
          <img class="img-fluid rounded-circle" src="{{asset('storage/img/One-Piece.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <div class="p-5">
          <h2 class="display-4">One Piece</h2>
          <p>The man who had acquired everything in this world, the Pirate King, is Gol D. Roger. The final words he said at the execution tower were "My treasures? If you want it, I'll let you have it. Look for it; I left all of it at that place." These words sent many to the seas, chasing their dreams, headed toward the Grand Line, in search of One Piece. And a new age began! Seeking to be the greatest pirate in the world, young Monkey D. Luffy also heads toward the Grand Line in search of One Piece. With his diverse crew joining him along the way, consisting of a swordsman, marksman, navigator, cook, doctor, archaeologist, and cyborg-shipwright, this will be one memorable adventure.</p>        </div>
      </div>
    </div>
  </div>
</section>
</div>
<div class="carousel-item">
    <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1">
              <div class="p-5">
                <img class="img-fluid rounded-circle" src="{{asset('storage/img/HunterxHunter.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="p-5">
                <h2 class="display-4">Hunter x Hunter (2011)</h2>
                <p>Gon Freecss is a young boy living on Whale Island. He learns from "Hunter" Kite, that his father, who he was told was dead, is still alive somewhere as a top "Hunter," risking his life to seek unknown items, such as hidden treasures, curiosa, exotic living creatures, etc. Gon decides to become a professional Hunter and leaves the island. To become a Hunter, he must pass the Hunter Examination, where he meets and befriends three other applicants: Kurapika, Leorio and Killua. Can Gon pass this formidable hurdle, the Hunter Examination, to become "the Best Hunter in the World" and eventually meet his father?</p>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
<div class="carousel-item">
    <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
              <div class="p-5">
                <img class="img-fluid rounded-circle" src="{{asset('storage/img/DetectiveConan.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 order-lg-1">
              <div class="p-5">
                <h2 class="display-4">Detective Conan</h2>
                <p>Shinichi Kudo, a seventeen year old master detective, had it all. He could solve any case brought to his attention and in record time. His girlfriend, Ran, is a karate expert, and her father is a bumbling P.I. who is driven crazy by the fact that Shinichi gets all of the great cases. One day, while Shinichi and Ran are at an amusement park, the pair become separated. Shinichi catches wind of a dirty deal going down, and spies on a pair of men in dark trenchcoats. He's caught and the men use an experimental poison on him, intending to kill him. However, things don't work exactly as planned. When Shinichi comes to, he finds he's shrunken down to the size of a fourth grader. How can Shinichi catch the criminals while also hiding his identity?!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
<div class="carousel-item">
    <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1">
              <div class="p-5">
                <img class="img-fluid rounded-circle" src="{{asset('storage/img/OnePunchMan.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="p-5">
                <h2 class="display-4">One Punch Man</h2>
                <p>The story follows the life of an average hero named Saitama who manages to win all of his fights with just one punch. This ends up being the cause of a lot of frustration as he no longer feels the thrill and adrenaline he once felt in battle. After all, what's so good about having overwhelming power?</p>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
<div class="carousel-item">
    <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
              <div class="p-5">
                <img class="img-fluid rounded-circle" src="{{asset('storage/img/Neverland.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 order-lg-1">
              <div class="p-5">
                <h2 class="display-4">The Promised Neverland</h2>
                <p>Norman, Emma, and Ray are the brightest kids at the Grace Field House orphanage. And under the care of the woman they refer to as "Mama," all the kids have enjoyed a comfortable life. Good food, clean clothes and the perfect environment to learn- what more could an orphan ask for? One day, though, Emma and Norman uncover the dark and twisted truth of the outside world they are forbidden from seeing. Soon, they must make haste to plan their escape!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
<div class="carousel-item">      
    <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 order-lg-1">
              <div class="p-5">
                <img class="img-fluid rounded-circle" src="{{asset('storage/img/Kingdom.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 order-lg-2">
              <div class="p-5">
                <h2 class="display-4">Kingdom</h2>
                <p>China’s Warring States period, a raging dragon that would raze the land for 500 years, saw many kingdoms rise and fall, making way for the next generation of kings and generals to fight for supremacy. Eventually, seven powerful states emerged from the endless cycle of warfare. In the kingdom of Qin, Xin Li, a war-orphaned slave, trains vigorously with fellow slave and best friend, Piao, who shares his proud dream of one day becoming a Great General of the Heavens. However, the two are suddenly forced to part ways when Piao is recruited to work in the royal palace by a retainer of the King.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection