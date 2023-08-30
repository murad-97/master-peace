let btn = document.getElementById('btn');
let inp = document.getElementById('inp');
let boxs=document.querySelectorAll('.box');
let room = document.querySelector('.room');
let drag = null; 






dragItem();

function dragItem() {
    let items=document.querySelectorAll('.item')
    items.forEach(item=>{
        item.addEventListener('dragstart', function(){
            drag = item;
            item.style.opacity = '0.5';
        })

        item.addEventListener('dragend', function(){
            drag = null;
            item.style.opacity = '1';
        })

        boxs.forEach(box=>{
            box.addEventListener('dragover', function(e){
                e.preventDefault();
                this.style.background = 'white';
                this.style.color = 'white';
            })

            box.addEventListener('dragleave', function(){
                this.style.background = 'white';
                this.style.color = 'black';
            })

            box.addEventListener('drop', function(){
               this.append(drag); 
               this.style.background = 'white';
               this.style.color = 'black';
            })
        })

    })
}

