var operand;

function addListener()
{
    var buttons = document.getElementsByClassName("buttons_click");

    for(i = 0; i < buttons.length; i++){
        buttons[i].addEventListener("click", function(event){
            var text = document.getElementById("one").innerHTML; 
            document.getElementById("one").innerHTML = text + event.target.value;
        });
    }

    var buttons_numerics = document.getElementsByClassName("buttons_num_click");

    for(i = 0; i < buttons_numerics.length; i++){
        buttons_numerics[i].addEventListener("click", function(event){
            
            var added = event.target.value; 
            var text = document.getElementById("one").innerHTML;
            document.getElementById("one").innerHTML = text + added;
            debugger;
            if(isNaN(added) && added != "="){
                operand = added;
            } else if(added == "="){
                var array_of_text = text.split(operand);
                var calculated;

                if(operand == "+"){
                    calculated = parseInt(array_of_text[0]) + parseInt(array_of_text[1]); 
                    document.getElementById("one").innerHTML = text + added + calculated;
                }else if(operand == "-"){
                    calculated = parseInt(array_of_text[0]) - parseInt(array_of_text[1]); 
                    document.getElementById("one").innerHTML = text + added + calculated;
                }else if(operand == "*"){
                    calculated = parseInt(array_of_text[0]) * parseInt(array_of_text[1]); 
                    document.getElementById("one").innerHTML = text + added + calculated;
                } else if(operand == "/"){
                    calculated = parseInt(array_of_text[0]) / parseInt(array_of_text[1]); 
                    document.getElementById("one").innerHTML = text + added + calculated;  
                }
            }    
        });
    }
}