<template>
    <div class="playlist">
        <p class="nav-link pb-0 m-0">PLAYLIST</p>
        <li class="nav-item pl-3" v-for="playlist in playlists" track-by="$index">
          <i class="fa fa-list leftgreyicon" aria-hidden="true"></i> <a class="nav-link" href="#">{{ playlist }}</a> <a @click="removePlaylist($index)" v-if="show"><i class="fa fa-times righticon" aria-hidden="true"></i></a>
        </li>
        <form>
          <div class="form-row pl-3" v-if="show" >
            <div class="col-9">
              <label class="sr-only" for="inlineFormInput">Name</label>
              <input type="text" class="form-control form-control-sm mb-2" id="inlineFormInput" v-model="playlist" placeholder="New Playlist Name">
            </div>
            <div class="col-3">
              <a class="btn btn-ua btn-sm mb-2" @click="addPlaylist"><i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
          </div>
        </form>
         <div class="pr-3 pl-3">
            <a class="btn btn-sm btn-ua btn-block" @click="showEdit" v-if="!show"><i class="fa fa-pencil" aria-hidden="true"></i> edit playlist </a>
            <a class="btn btn-sm btn-ua btn-block" @click="showEdit" v-if="show"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save playlist </a>
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
                playlist: '',
                show: false,
                playlists: ['Editors Pick','Naija 2017 Jamz','2Face Only'],
            }
        },
        methods: {
            addPlaylist: function () {
                    try {
                        if(this.playlist !== ''){
                            this.playlists.push(this.playlist);
                            this.playlist = '';
                        }
                    } catch(e)
                    {
                        console.log(e);
                    }
                },
            removePlaylist: function (index) {
                this.playlists.splice(index, 1);
            },
            showEdit: function(){
                this.show = !this.show;
            }
        }
    }
</script>
