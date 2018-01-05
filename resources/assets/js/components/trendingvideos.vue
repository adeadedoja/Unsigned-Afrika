<template>
    <div class="trendingvideo">
        <div class="row">    
            <div class="col-md-8">
                <p class="nav-link p-0 m-0">TRENDING</p>
                <h2 class="m-0 p-0"><i class="fa fa-video-camera" aria-hidden="true"></i> Videos</h2>
            </div>
            <div class="col-md-4 text-right pr-4">
                <a class="customPrevBtn"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                <a class="customNextBtn"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="pt-2">
            <div class="owl-carousel owl2 owl-theme">
              <div v-for="video in videos" track-by="$index">
                    <div class="card bg-dark text-white">
  <img class="card-img" :src="video.img">
  <div class="card-img-overlay">
        <p class="nav-link p-0 m-0">{{ video.artist }}</p>
        <h5 class="p-0 m-0">{{ video.title }}</h5>
  </div>
</div>
                  
                    
              </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.startOwl2();
            console.log('Component mounted.')
        },
        data(){
            return{ 
                id: 2,
                videos: [{ "title": "Like Dat", "artist":"Davido", "img":"https://static.pulse.ng/img/incoming/origs6239210/8246363725-w644-h960/Davido.jpg"},
                            { "title":"XO TOUR Llif3", "artist":"Lil Uzi Vert", "img":"https://pbs.twimg.com/media/C1_hcBoUcAAMG23.jpg"} ,
                            { "title":"Desire ft Tay Iwar, Funbi", "artist":"Odunsi the Engine", "img":"https://i1.sndcdn.com/artworks-000208540020-nrhmf6-t500x500.jpg"} ,
                            { "title":"Learn You", "artist":"6lack", "img":"https://pbs.twimg.com/media/CxhEsJ-UoAApJ09.jpg"} ,
                            { "title": "Soke", "artist":"Burna Boy", "img":"https://www.36ng.ng/wp-content/uploads/2015/04/Burna-Boy-Soke.jpg"} ,
                            { "title": "Pana", "artist":"Tekno", "img":"http://www.transafricaradio.net/wp-content/uploads/2016/11/Pana-e1478601787359.png"} ,
                            { "title": "KMT ft Giggs", "artist":"Drake", "img":"http://thefader-res.cloudinary.com/private_images/w_760,c_limit,f_auto,q_auto:best/drake-views-from-the-6-cover-story-interview_ic4ox9/drake.jpg"} ,
                        ]
            }
        },
        methods: {
            startOwl2: function(){
                  var owl = $('.owl2');
                  owl.owlCarousel(
                    {
                    margin:15,
                    loop:true,
                    items:1,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:1,
                            nav:false
                        },
                        600:{
                            items:1,
                            nav:false
                        },
                        1000:{
                            items:2,
                            nav:false,
                            loop:false
                        }
                    }
                    });
                // Go to the next item
                $('.customNextBtn').click(function() {
                    owl.trigger('next.owl.carousel');
                })
                // Go to the previous item
                $('.customPrevBtn').click(function() {
                    // With optional speed parameter
                    // Parameters has to be in square bracket '[]'
                    owl.trigger('prev.owl.carousel', [300]);
                })
            }
        }
    }
</script>
