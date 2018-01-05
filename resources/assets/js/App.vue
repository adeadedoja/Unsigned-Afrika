<template>
    <div>
        <div class="">
         <header class="header">
              <nav class="navbar navbar-expand-md bg-light">
                <!--<a class="navbar-brand" href="#">Unsigned Africa</a>-->
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for song or artist" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                      </div>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown dropdownprofile">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle-o"></i> Hi Dami
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul>
                  
                </div>
              </nav>
            </header>
            <!--<div>
                <aud></aud>
                <router-link to="/Bar">Go to Bar</router-link>
                <router-link to="/">Go to Home</router-link>
                <transition name="fade">
                    <router-view></router-view>
                </transition>
            </div>-->
            <div class="container">
              <div class="tophero"><tophero></tophero></div>
              <div class="featuredsongs"><featuredsongs></featuredsongs></div>
              <div class="row pt-3">
                <div class="col-md-6"><trendingsongs></trendingsongs></div>
                <div class="col-md-6"><trendingvideos></trendingvideos></div>
              </div>
            </div>

        </div>
            <nav class="navbar fixed-bottom navbar-expand-sm bg-white">
      <a class="navbar-brand" href="#">Bottom navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropup">
            <a class="nav-link dropdown-toggle" href="https://getbootstrap.com" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</a>
            <div class="dropdown-menu" aria-labelledby="dropdown10">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    </div>

</template>
<style>
    .fade-enter-active, .fade-leave-active {
      transition: opacity .5s
    }
    .fade-enter, .fade-leave-active {
      opacity: 0
    }
</style>
<script>

import aud from './components/Audio.vue';
import trendingsongs from './components/trendingsongs.vue';
import featuredsongs from './components/featuredsongs.vue';
import trendingvideos from './components/trendingvideos.vue';
import tophero from './components/tophero.vue';

    export default{
        components: {
            'aud': aud,
            'featuredsongs': featuredsongs,
            'trendingsongs': trendingsongs,
            'trendingvideos': trendingvideos,
            'tophero': tophero,
        }
    }
</script>