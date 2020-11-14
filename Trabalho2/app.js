const API_KEI ='0711b2f22fc743759ddbadf44c764584';
function exibeNoticias(){
let divTela=document.getElementById('tela');
let texto ='';
let dados =JSON.parse(this.responseText);
for(i=0; i < dados.articles.length; i++){ 
let noticia = dados.articles[i];
let data =new Date (noticia.publishedAt);
texto = texto + `
 <div class="box-noticia">
<img src="${noticia.urlToImage}" alt="">
<span class="titulo">${noticia.title}</span><br>
<span class="creditos">${data.toLocaleDateString ()} - 
    ${noticia.source.name} - 
    ${noticia.author}</span><br>
<span class="text">
${noticia.content}<br><a href="${noticia.url}" class="btn btn-secondary">Ver mais..</a>
</span>
</div> 
`;
}
divTela.innerHTML=texto;
}
executaInicio();
function executaInicio () {
    let xhr = new XMLHttpRequest ();
    xhr.onload = exibeNoticias;
    xhr.open ('GET', `https://newsapi.org/v2/top-headlines?country=br&apiKey=${API_KEI}`);
    xhr.send ();
};


function executaPesquisa(){
 let query= document.getElementById('txtPesquisa').value;
 let xhr=new XMLHttpRequest();
 xhr.onload= exibeNoticias;
 xhr.open('GET',`https://newsapi.org/v2/everything?q=${query}&apiKey=${API_KEI}`);
 xhr.send();
};
document.getElementById('btnPesquisa').addEventListener('click', executaPesquisa);

function executaPesquisa3(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
   xhr.open('GET',`https://newsapi.org/v2/top-headlines?country=br&category=sports&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn3').addEventListener('click', executaPesquisa3);

    function executaPesquisa4(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
    xhr.open('GET',`https://newsapi.org/v2/top-headlines?country=br&category=entertainment&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn4').addEventListener('click', executaPesquisa4);
   
  
    function executaPesquisa5(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
    xhr.open('GET',`https://newsapi.org/v2/top-headlines?country=br&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn5').addEventListener('click', executaPesquisa5);
   
   
    function executaPesquisa6(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
    xhr.open('GET',`https://newsapi.org/v2/top-headlines?q=covid-19&q=corona&country=br&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn6').addEventListener('click', executaPesquisa6);
   
   
    function executaPesquisa7(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
    xhr.open('GET',`https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn7').addEventListener('click', executaPesquisa7);
   
   
    function executaPesquisa8(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
    xhr.open('GET',`https://newsapi.org/v2/top-headlines?country=br&category=business&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn8').addEventListener('click', executaPesquisa8);

  function executaPesquisa10(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
   xhr.open('GET',`https://newsapi.org/v2/everything?q=health&language=pt&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn10').addEventListener('click', executaPesquisa10);

   function executaPesquisa11(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
   xhr.open('GET',` https://newsapi.org/v2/everything?q=science&language=pt&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn11').addEventListener('click', executaPesquisa11);

   function executaPesquisa12(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
   xhr.open('GET',`https://newsapi.org/v2/everything?q=games&language=pt&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn12').addEventListener('click', executaPesquisa12);

   function executaPesquisa13(){
    let xhr=new XMLHttpRequest();
    xhr.onload= exibeNoticias;
   xhr.open('GET',`https://newsapi.org/v2/everything?q=tourism&language=pt&apiKey=${API_KEI}`);
    xhr.send();
   };
   document.getElementById('btn13').addEventListener('click', executaPesquisa13);
