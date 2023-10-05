Home
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        let time = 20;
        setInterval(() => {
            if(time == 0){
                
                window.location.href = '{{route("logout")}}';
            }
            console.log(time);
            time--;

        },1000);
    });
</script>