const { default: axios } = require("axios");



    document.addEventListener('DOMContentLoaded', function(){

        let form = document.querySelector("#formEvent");

        var calendarEl = document.getElementById('agenda');

        var calendar = new FullCalendar.Calendar(calendarEl, {

            initialView: 'dayGridMonth',
            locale: "es",
            displayEventTime: false,

            headerToolbar: {
                left: 'prev, next, today',
                center: 'title',
                right: 'dayGridMonth'
            
            },

            //events: baseURL +"/event/show",

            EventSource:{
                url: baseURL + "/event/show",
                method:"POST",
                extraParams: {
                  _token: form._token.value,
                }
            }

            dateClick: function(info){
                form.reset();
                form.start.value= info.dateStr;
                form.end.value= info.dateStr;

                $("#event").modal("show");
            },

            eventClick: function(info){
                var event = info.event;
                console.log(event);

                axios.post(newURL + "/event/edit/"+info.event.id, data).
                then(
                    (response)=>{
                        form.id.value = response.data.id;
                        form.title.value = response.data.title;
                        form.description.value = response.data.description;
                        form.start.value = response.data.start;
                        form.end.value = response.data.end;
                        $("#event").modal("show");
                    }
                ).catch(
                    error=>{
                        if(error.response){
                            console.log(error.response.data);
                        }
                    }
                )
            }

        });
        calendar.render();

        document.getElementById("btnSave").addEventListener("click", function(){
        
          sendData("/event/add/");
          
        });
        
        document.getElementById("btnDelete").addEventListener("click", function(){
            sendData("/event/delete/"+form.id.value);
            
        });

        document.getElementById("btnDelete").addEventListener("click", function(){
            sendData("/event/update/"+form.id.value);
            
        });
        
        function sendData(url){
            const data= new FormData(form);
            newURL=baseURL + url;
            axios.post(newURL, data).
            then(
                (response)=>{
                    calendar.refetchEvents();
                    $("#event").modal("hide");
                }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            )
        }

    });

