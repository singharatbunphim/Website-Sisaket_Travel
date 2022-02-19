const travel_item = document.querySelectorAll(".mytable-view .btn-view");
const stagemenupage = document.querySelector(".stage-menu-page");
travel_item.forEach( index => {

      index.addEventListener("click",() =>{
            var id = index.getAttribute('id');
            Create_State_Elemet(id);
      });

});


function Create_State_Elemet(id){

      const createState = document.createElement("div");
      createState.setAttribute("class","stage-view-travel");
      stagemenupage.appendChild(createState);
      var pageView = document.querySelector(".stage-view-travel");
      var container = document.createElement("div");
      container.setAttribute("class","container");
      var object = document.createElement("div");
      object.setAttribute("class","view-travel-item-see");
      var item_view = document.createElement("div");
      item_view.setAttribute("class","item-view");



      object.appendChild(item_view);      
      container.appendChild(object);

      pageView.appendChild(container)

      QueryElemntByID(id);
}


const QueryElemntByID = function(id){

      var item_viewaa = document.querySelector('.item-view');
      
      if(id){
          const queryData  = $.ajax({
                  method: 'POST',
                  url: 'queryData.php',
                  data: {'Id_query': id },
                  success: function(e){
                        item_viewaa.innerHTML = e;
                  }
            });
      }
}
