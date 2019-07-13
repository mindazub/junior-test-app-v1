<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>The greatest news app ever</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css">
</head>
<body>

@yield('content')

<div class="container" id="app">
    <h3 class="text-center">VueNews</h3>

    <section class="callout secondary">
        <h5 class="text-center">Filter by Category</h5>
        <form>
            <div class="row">
                <div class="large-6 columns">
                    <select v-model="section">
                        <option v-for="section in sections" :value="section">{{ section }}</option>
                    </select>
                </div>
                <div class="medium-6 columns">
                    <a @click="getPosts(section)" class="button expanded">Retrieve</a>
                </div>
            </div>
        </form>
    </section>

    <news-list :results="results"></news-list>
</div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>
<script>

    const NYTBaseUrl = "https://api.nytimes.com/svc/topstories/v2/";
    const ApiKey = "uFamJEvoUlTguk0u4J7qsYly33mi0hoZ";

    function buildUrl (url) {
        return NYTBaseUrl + url + ".json?api-key=" + ApiKey
    }

    Vue.component('news-list', {
        props: ['results'],
        template: `
          <section>
            <div class="row" v-for="posts in processedPosts">
              <div class="columns large-3 medium-6" v-for="post in posts">
                <div class="card">
                <div class="card-divider">
                {{ post.title }}
            </div>
            <a :href="post.url" target="_blank"><img :src="post.image_url"></a>
            <div class="card-section">
              <p>{{ post.abstract }}</p>
                </div>
              </div>
              </div>
            </div>
        </section>
        `,
        computed: {
            processedPosts() {
                let posts = this.results;

                // Add image_url attribute
                posts.map(post => {
                    let imgObj = post.multimedia.find(media => media.format === "superJumbo");
                    post.image_url = imgObj ? imgObj.url : "http://placehold.it/300x200?text=N/A";
                });

                // Put Array into Chunks
                let i, j, chunkedArray = [], chunk = 4;
                for (i=0, j=0; i < posts.length; i += chunk, j++) {
                    chunkedArray[j] = posts.slice(i,i+chunk);
                }
                return chunkedArray;
            }
        }
    });

    const SECTIONS = "home, arts, automobiles, books, business, fashion, food, health, insider, magazine, movies, national, nyregion, obituaries, opinion, politics, realestate, science, sports, sundayreview, technology, theater, tmagazine, travel, upshot, world"; // From NYTimes

    const vm = new Vue({
        el: '#app',
        data: {
            results: [],
            sections: SECTIONS.split(', '), // create an array of the sections
            section: 'home', // set default section to 'home'
        },
        mounted () {
            this.getPosts(this.section);
        },
        methods: {
            getPosts(section) {
                let url = buildUrl(section);
                axios.get(url).then((response) => {
                    this.results = response.data.results;
                }).catch( error => { console.log(error); });
            }
        }
    });



</script>
</body>
</html>
