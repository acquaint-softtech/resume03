<?php

use Illuminate\Support\Facades\Route;
use Statamic\Entries\Entry;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('/collection/blog/{offset}', function (Request $request) {
    $entries1 = Entry::query()->where('collection', 'blog')
        ->offset($request->offset)
        ->limit(3)
        // ->orderBy('order')
        ->orderBy('date', 'desc')
        ->get(['title', 'image','short_description','popup_image','quo_title','categories','content','quote_section']);
        
    $html = '';
    $data = [];
    $data['countData'] = 0; 
    if($entries1->count() > 0 ) {
        $data['countData'] = 1; 
        foreach($entries1 as $key => $entry1) {
            $html .= ' <div
            class="blog__card shadow-[0_0_50px_0_rgba(196,206,213,0.2)] hover:shadow-[0_0_100px_0_rgba(196,206,213,0.7)] dark:shadow-[0_0_20px_0_rgba(0,0,0,0.1)] dark:hover:shadow-[0_0_50px_0_rgba(0,0,0,0.2)] transition duration-500">
            <a class="block popup-modal--open" href="javascript:void(0)"  @click="Modal = '.$key+1+ $request->offset.' ">
                <div class="overflow-hidden">
                    <span class="block">
                        <img class="blog__thumb w-full transition duration-300" src="'.$entry1->image.'" alt="">
                    </span>
                </div>
                <div class="p-7.5">
                    <div class="mb-3.9">
                    
                    <span
                    class="bg-accent1_rgb text-sm uppercase py-1 px-1.5 text-accent1 dark:text-white dark:bg-accent1 hover:bg-accent1 hover:text-white transition-all duration-300">'.$entry1->categories[0]['slug'].'</span>
                    </div>
                    <div>
                        <h3 class="text-[25px] leading-7 font-heebo font-bold">
                            <span
                                class="text-primary hover:text-accent1 dark:text-white dark:hover:text-accent1 transition-all duration-300">'.$entry1->title.'</span>
                        </h3>
                        <p class="mt-3.9 text-paragraph dark:text-slate-200 text-17">'.$entry1->short_description.'
                        </p>
                    </div>
                </div>
            </a>
        <div class="modal_portfolio fixed h-screen w-full left-0 top-0 z-[999999] opacity-0 active invisible"
        x-show="Modal === '.$key+1+ $request->offset.' " x-cloak>
        <div class="modal_popup_overlay fixed w-full h-full bg-black left-0 top-0 opacity-[0.3]"></div>
        <div class="modal__portfolio--content relative z-10 h-full flex items-center px-4 max-w-[750px] xl:max-w-[800px] mx-auto transition duration-300 translate-y-[-50px]"
            @click.away="Modal = false">
            <div
                class="overflow-y-auto modal__portfolio--content-inner bg-white dark:bg-gray-800  max-h-[60vh] lg:max-h-[80vh] p-8 rounded-2xl relative">
                <button
                    class="modal__popup--close ltr:right-[5px] rtl:left-[5px] top-[5px] absolute w-[50px] h-[50px] bg-accent1 text-white rounded-full flex items-center justify-center transition-all duration-300 hover:bg-primary dark:hover:bg-[#181a1d]"
                    @click="Modal = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <div>
                    <div class="pt-3">
                        <img class="max-w-full h-auto rounded-xl mt-6 mx-auto w-full" src="'.$entry1->popup_image.'"
                            alt="Blog details">
                    </div>
                    <h4 class="text-[25px] lg:text-[32px] leading-7 font-heebo font-bold mt-8">
                        <span class="text-primary dark:text-white">'.$entry1->title.'</span>
                    </h4>
                    <div class="blog__content mt-5 text-17 leading-7 dark:text-slate-300">
                        <p>'.$entry1->content[0]['text'].'</p>
                        <blockquote
                            class="p-4 my-4 bg-gray-50 ltr:border-l-4 rtl:border-r-4 border-gray-300 dark:border-[#181a1d] dark:bg-[#181a1d] dark:text-white text-xl">
                            <svg aria-hidden="true" class="w-10 h-10 text-gray-400 dark:text-gray-600"
                                viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                                    fill="currentColor" />
                            </svg>
                            <p>'.$entry1->content[1]['quo_title'].'</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>';
        }
        if($entries1->count() < 3 ) {
            $data['countData'] = 0;
        }
    }
    $data['htmlContent'] = $html;
    return $data;
});
