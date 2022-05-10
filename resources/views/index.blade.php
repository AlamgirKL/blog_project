@extends('layouts.app')

<style>
    /* .background-image {

    
        background: url('../img/bc.jpg' alt="gfhgdt");
        
        /* background: url('https://cdn.pixabay.com/photo/2020/04/30/15/34/code-5113374_960_720.jpg');
     */
} */

</style>
<!-- <link rel="stylesheet" href="/css/app.css"> -->

@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class=" flex text-gray-100 pt-10">
        <div class=" m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center" >
            <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                Starting Your Own Blog 

            </h1>
            <a 
                
                href="/blog"
                class=" text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
            Rede More</a>

        </div>

    </div>
    

</div>
<div>
       

    </div>


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
        <img src="../images/abc.jpg" alt="blog" width ="700" >

        </div>
        
        

        <div class="m-auto sm:m-auto text-laft w-4/5 block">
                <h2 class="text-4xl font-extrabold text-gray-600">
                How can Create a Blog ? 

                 </h2>
            <p class=" py-8 text-gray-500 text-xl">
            Choose a website template to showcase your blog.
             

            </p>
            <p class=" py-8 text-gray-600 text-l pb-9 ">
               

            </p>
            <a href="/blog"
         class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
         Find Out More 
         </a>
     </div>
    
     
    </div>
    
    <div class=" text-center p-15  bg-black text-white "> 
        

        <h2 class= " pb-5  text-l text-2xl ">
            i'm an expert in..
        </h2>
        <span class="font-extrabold block text-3xl py-1">
            Ui Design 

        </span>
        <span class="font-extrabold block text-3xl py-1">
            Web Design 

        </span>
        
        <span class="font-extrabold block text-3xl py-1">
            Digital Markating 

        </span>
        <span class="font-extrabold block text-3xl py-1">
            Web Development

        </span>

    </div>

    <div class="text-center py-15">
        <span class=" uppercase text-sm text-cool-gray-400">
                BLOG

        </span>
        <h2 class=" text-3xl font-bold py-10 ">
            Recent Post

        </h2>
        <span class=" m-auto w-4/5 text-gray-500">
          

        NewSpace is The All in one  Platform to build a standard Blog 
        </span>
    </div>

    <div class=" sm:grid grid-cols-2 w-4/5 m-auto">
        <div class=" flex bg-yellow-700 text-gray-100 pt-10">
            <div class ="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class ="uppercase text-xs">
                    PHP  

                </span>

                <h3 class=" text-xs font-bold p-10 ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ad amet quo sunt, 
                    labore est iusto quaerat dignissimos optio mollitia sapiente ex reiciendis veniam velit recusandae quos vitae fugit aut!  

                </h3>

                <a 
                href="" 
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5  rounded-3xl">
                Find Out More
                </a>


                
            </div>

        </div>
        <div>
            <div><img src="../images/abc.jpg" alt="blog" width ="700" ></div>
        </div>
    </div>


@endsection