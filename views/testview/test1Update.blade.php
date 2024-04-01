<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Update Player') }}
            <x-secondary-button class="ms-20">
              
                <a href="{{ route('test1index') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Back</a>
            </x-secondary-button>
        </h2>
        
           
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-900">
                    
                    <form action="{{ url('test1_edit', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
        
                        <div style="padding: 10px;">                                    
                            <x-input-label for="name" :value="__('Name')" />                                    
                            <x-text-input  class="block mt-1 w-full " type="text" name="name" value="{{ $data->name }}" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div style="padding: 10px;">

                            <x-input-label for="test1_id" :value="__('Shirt Number')" />
                            <x-text-input  class="block mt-1 w-full" type="number" name="test1_id" value="{{ $data->test1_id }}" required autofocus autocomplete="shirt number" />                                    
                            <x-input-error :messages="$errors->get('test1_id')" class="mt-2" />
                        </div>

                        <div style="padding: 10px;">
                            <x-input-label :value="__('Gender')"/>                       
                               @foreach ($gendata as $row1)                               
                               <input  type="radio" name="gender" value="{{ $row1->id }}" {{ $gendata[($data->gender)-1]->gender_id == $row1->id ? 'checked' : ''}}/>{{ $row1->name }}                            
                               @endforeach                                                               
                            @error('gender')
                                <span class="text-red-400">{{ $message }}</span>
                            @enderror
                            {{-- <x-input-error :messages="$errors->get('gender')" class="mt-2" /> --}}
                        </div>

                        
                        
                        <div style="padding: 10px;">
                            <x-input-label for="district" :value="__('District')"/>
                                                                
                            <select class="text-black" name="district">
                                <option class="text-black" value="{{$data->district }}">{{ $distdata[strval($data->district)-1]->name }}</option>
                                @foreach ($distdata as $row2)
                                    <option class="text-blue-500" value="{{ $row2->id }}">{{ $row2->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('district')" class="mt-2" />
                        </div>
                        
                        <div style="padding: 10px;">
                            <x-input-label  for="position" :value="__('Position')"/>                                                                                          
                                          
                               @foreach ($posdata as $row3)                               
                               <input  type="radio" name="position" value="{{ $row3->id }}" {{ $data->position == $row3->id ? 'checked' : ''}}/>{{ $row3->name }}                            
                               @endforeach   
                            
                            <x-input-error :messages="$errors->get('position')" class="mt-2" />
                        </div>
        
                        <div style="padding: 10px;">
                            <x-input-label for="photo" :value="__('Photo')"/>                                    
                            <x-text-input accept="image/*" class="block mt-1 w-full" type="file" name="photo" autofocus autocomplete="photo" />
                                <img src="{{ asset($data->photo) }}" style="width: 100px;
                                height:100px" alt="Img"/>   
                        </div>

                        <div style="padding: 10px;">
                            <x-input-label for="latitude" :value="__('Latitude')"/>                                    
                            <x-text-input  id="latitude" step="0.000000000000001" class="block mt-1 w-full" type="number" name="latitude" value="{{ $data->latitude }}"  autofocus autocomplete="latitude" />
                            <x-input-label for="longitude" :value="__('Longitude')"/>                                    
                            <x-text-input id="longitude" step="0.000000000000001" class="block mt-1 w-full" type="number" name="longitude" value="{{ $data->longitude }}"  autofocus autocomplete="longitude" />

                        </div>

                        <div style="height: 180px;" id="map">
                            
                        </div>
                        
                        
                        <div style="padding: 10px;" align="center">
                            <x-primary-button class="ms-3">
                                {{ __('Submit') }}
                            </x-primary-button>
                        </div>

                    </form>                                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
        

        
