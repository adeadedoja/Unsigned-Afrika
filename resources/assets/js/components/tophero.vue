<template>
    <div class="tophero p-4">
        <div class="row">    
            <div class="col-md-5">
                <div class="bottomtext">
                    <p class="nav-link p-0 m-0">WELCOME TO</p>
                    <h1 class="m-0 p-0">Unsigned Afrika</h1>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et tellus ante. Nulla mi sapien, dictum ac turpis sit amet, consectetur commodo sem.</p>
                </div>
                <div class="row">
                    <div class="col-6"><a class="btn btn-ua btn-block">Login</a></div>
                    <div class="col-6 text-left"><a class="btn btn-light">Register</a></div>
                </div>
            </div>
            <div class="col-md-4 text-right pr-4">
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{ 
                id: 2,
                songs: [{ "title": "Like Dat", "artist":"Davido", "img":"https://static.pulse.ng/img/incoming/origs6239210/8246363725-w644-h960/Davido.jpg"},
                            { "title":"XO TOUR Llif3", "artist":"Lil Uzi Vert", "img":"https://pbs.twimg.com/media/C1_hcBoUcAAMG23.jpg"} ,
                            { "title":"Desire ft Tay Iwar, Funbi", "artist":"Odunsi the Engine", "img":"https://i1.sndcdn.com/artworks-000208540020-nrhmf6-t500x500.jpg"} ,
                            { "title":"Learn You", "artist":"6lack", "img":"https://pbs.twimg.com/media/CxhEsJ-UoAApJ09.jpg"} ,
                            { "title": "Soke", "artist":"Burna Boy", "img":"https://www.36ng.ng/wp-content/uploads/2015/04/Burna-Boy-Soke.jpg"} ,
                            
                        ]
            }
        }
    }
</script>


