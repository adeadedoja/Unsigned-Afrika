<template>
    <div class="trendingsong">
        <div class="row">    
            <div class="col-md-8">
                <p class="nav-link p-0 m-0">TRENDING</p>
                <h2 class="m-0 p-0"><i class="fa fa-fire" aria-hidden="true"></i> Hot Songs</h2>
            </div>
            <div class="col-md-4 text-right pr-4">
                
            </div>
        </div>
        <div class="pt-2">
            <table class="table table-hover">
                <tr class="grey">
                    <td></td>      
                    <td>Title</td>      
                    <td>Artist</td>      
                    <td>Album</td>      
                    <td>Time</td>      
                </tr>
                <tr v-for="song in songs" track-by="$index">
                    <td><div class="trendingsong_img"><img :src="song.img" class="img-fluid rounded"></div></td>      
                    <td>{{ song.title }}</td>      
                    <td>{{ song.artist }}</td>      
                    <td>Single</td>      
                    <td>2:45</td>      
                </tr>
            </table>
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


