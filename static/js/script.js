let armies = ["*** ARMY 1 ***", "*** ARMY 2 ***"];
        let firstAttacksRandom = armies[Math.floor(Math.random()*armies.length)];
        let className;

        switch( firstAttacksRandom )
        {
            case armies[0]:
            className = "blue";
            break;
            case armies[1]:
            className = "red";
            break;
        }

        function battleStart() {
            $('.message').append('Battle begins');

            setTimeout(() => {
                $('.message').html('Battle begins.');
            }, 1000);

            setTimeout(() => {
                $('.message').html('Battle begins..');
            }, 2000);

            setTimeout(() => {
                $('.message').html('Battle begins...');
            }, 3000);

            setTimeout(() => {
                $('.message').html('Battle begins...');
                $('.battle-status-div').append('<p>First attacks: <span class="'+ className +'">'+ firstAttacksRandom +'</span></p>');

                $.ajax({
                    url: "index.php",
                    type: "POST",
                    data: {
                        attacker: firstAttacksRandom
                    },
                    success: function(response){
                        setTimeout(() => {
                            $('.battle-status-div').append('<p>'+ response +'</p>');
                        }, 1000);
                    }
                });

            }, 4000);
        }



        var objDiv = document.querySelector(".battle-status-div");
        objDiv.scrollTop = objDiv.scrollHeight;
        
        