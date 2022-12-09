export default class produkters{
    constructor() {

        this.data ={
            password: 1717
        }

        this.rootElem = document.querySelector('.produkters');
        this.items = this.rootElem.querySelector('.items');

    }

    async init(){
        await this.render();
    }
    async render() {
        const data = await this.getData();

        const row =document.createElement('div');
        row.classList.add('row','g-4','pt-5');

        for(const  items of data){
            const col = document.createElement('div');
            col.classList.add('col-12', 'rounded-4');

            col.innerHTML= `
           
            <div class="col-12">
            <div class="card h-100 shadow border-0">
            <a  href="Produktunderside.php?prodId=${items.prodId}" class="text-decoration-none text-dark">
               <div>
                    <img src ="uploads/${items.prodImg}" class="card-img-top img-fluid obj1" alt="">
                    <h2 class="p-2 text-header">${items.prodNavn}</h2>                                           
               </div>
                 
                                  
                     
                 </a>
                     
            </div>
           
                                       
          `;
            row.appendChild(col);
        }
        this.items.innerHTML='';
        this.items.appendChild(row);
    }




    async getData(){
        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return  await response.json();
    }
}
