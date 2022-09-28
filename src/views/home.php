<div id="vue_home">
    Home
</div>

<script>
    let home = new Vue({
        el: '#vue_home',
        data() {
            return {

            }
        },
        created() {
            // http://localhost/home/pegar
            api.get("home/pegar")
        }
    });
</script>