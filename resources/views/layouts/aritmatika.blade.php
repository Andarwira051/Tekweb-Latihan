<x-home-layout>
    <div>
        <div class="bg-white overflow-hidden shadow-sm">
            <div class="p-6 bg-gray-300 border-b border-gray-200">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b border-gray200 pt-2 pb-6">
                        <h1 class="text-4xl font-bold tracking-tight text-gray900">Kalkulator Sederhana</h1>
                    </div>
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-10 mx-auto">
                            <div class="flex flex-wrap -m-4">
                                <div class="p-4 md:w-1/3">
                                    <form method="POST" action="/hasil" >
                                        @csrf
                                        <div class="flex items-center gap-x-4">
                                            <label for="Name">Angka Pertama</label>
                                            <input type="number" name="bil_1" class="w-1/3 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"/>
                                        </div>
                                        <label for="Name">Pilih Pengoprasian</label>
                                        <select class="form-control" name="operator" id="choice-search" placeholder="Location"> 
                                            <option value="penjumlahan">Penjumlahan</option>
                                            <option value="pengurangan">Pengurangan</option>
                                            <option value="perkalian">Perkalian</option>
                                            <option value="pembagian">Pembagian</option>
                                            <option value="modulus">Modulus</option>
                                        </select>

                                        <div class="flex items-center gap-x-7">
                                            <label for="Name">Angka Ke-dua</label>
                                            <input type="number" name="bil_2" class="w-1/3 px-4 py-2 border border-gray-300 outline-none focus:border-gray-400"/>
                                        </div>


                                        <div class="mt-4">
                                            <div>
                                                @if(session('hasil'))
                                                <div>
                                                    <h1>{{session('hasil')}}</h1>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        
                                        <div class="mt-6">
                                            <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Cek Hasil</button>
                                        </div>
                                    </form>
                                </div>
                            </div>   
                        </div>
                    </section>      
                </main>
            </div>
        </div>      
    </div>                 
</x-home-layout>