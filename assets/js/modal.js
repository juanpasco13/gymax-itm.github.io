const botones = document.querySelectorAll(".btn-sm");
const userModal = new bootstrap.Modal(document.getElementById('userModal'));
const son = document.getElementById("son");
const modal = document.getElementById("userModal");
const edit = document.getElementById("edit");
const save = document.getElementById("save");


const getData = function(){
    save.disabled = true;
    edit.disabled = false;
    document.querySelector("#email").readOnly = true;
    document.querySelector("#name").readOnly = true;
    document.querySelector(".modal-title").textContent = "";
    fetch(window.location.protocol + "//" + window.location.host+ '/gymax/api/users/loaduser/'+this.innerText)
        .then(response => response.json())
        .then(data => {

            document.querySelector(".modal-title").textContent = 'Usuario: '+ data['name'];
            document.querySelector("#name").value = data['name'];
            document.querySelector("#id").value = data['id'];
            document.querySelector("#user_name").value = data['user_name'];
            document.querySelector("#email").value = (data['email'] === null )? '' : data['email'];
            document.querySelector("#date_to").value = data['date_created'];
            document.querySelector("#last_login").value = data['last_con'];
            son.style.visibility = 'hidden';
            son.style.opacity = '0';
            son.style.transition = 'all 500ms ease';
        } )
        .catch(err => {
            alert(err)
        });
    
    son.style.visibility = 'visible';
    son.style.opacity = '1';
    userModal.show();
}

botones.forEach(boton => {
    boton.addEventListener("click", getData);
});

edit.addEventListener('click', ()=>{
    save.disabled = false;
    edit.disabled = true;
    document.querySelector("#email").readOnly = false;
    document.querySelector("#name").readOnly = false;
    
})
