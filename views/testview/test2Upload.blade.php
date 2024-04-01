<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-600 leading-tight">
            {{ __('New Player') }}
            <x-secondary-button class="ms-20">
              
                <a href="{{ route('test2index') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Back</a>
            </x-secondary-button>
        </h2>
        
           
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-600">
                    
                            <form action="{{ url('test2add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                
                                <div style="padding: 10px;">                                    
                                    <x-input-label for="name" :value="__('Name')" />                                    
                                    <x-text-input  class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div style="padding: 10px;">
                                    <x-input-label for="test2_id" :value="__('Shirt Number')" />
                                    <x-text-input  class="block mt-1 w-full" type="number" name="test2_id" :value="old('test2_id')" required autofocus autocomplete="shirt number" />                                    
                                    <x-input-error :messages="$errors->get('test2_id')" class="mt-2" />
                                </div>

                                <div style="padding: 10px;">
                                    <x-input-label for="gender" :value="__('Gender')"/>
                                    
                                        @foreach ($gendata as $row1)                                        
                                            
                                            <label class="text-blue-500 p-1" value="{{ $row1->id }}">{{ $row1->name }}</label>
                                            <x-text-input  type="radio" name="gender" value="{{ $row1->id }}" required autofocus autocomplete="gender" />

                                        @endforeach
                                    </select>
                                    @error('gender')
                                        <span class="text-red-400">{{ $message }}</span>
                                    @enderror
                                    {{-- <x-input-error :messages="$errors->get('gender')" class="mt-2" /> --}}
                                </div>

                                
                                <div style="padding: 10px;">
                                    <x-input-label for="district" :value="__('District')"/>
                                    <select id="district-dd" wire:model.live="selectedDistrict">
                                        <option value="" selected>Choose District</option>

                                    @foreach($distdata as $row2)
                                        <option class="text-blue-600" value="{{$row2->id}}">{{$row2->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="style=padding: 10px;">
                                    <x-input-label for="town" :value="__('Town')"/>
                                        <select id="town-dd">
                                            <option value="" selected>Choose Town</option>
                                            @if ($towndata)

                                            @foreach ($towndata as $twn )
                                                <option class="text-blue-600" value="{{$twn->id}}">{{$twn->name}}</option>
                                            @endforeach
                                                
                                            @endif                                    
                                        </select>
                                </div>

                                {{-- <div style="padding: 10px;">
                                    <x-input-label for="district" :value="__('District')"/>
                                                                        
                                    <select class="text-black" name="district">
                                        <option class="text-blue-600">--Please Choose an option--</option>
                                        @foreach ($distdata as $row2)
                                            <option class="text-blue-500" value="{{ $row2->id }}">{{ $row2->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('district')" class="mt-2" />
                                </div>

                                <div style="padding: 10px;">
                                    <x-input-label for="town" :value="__('Town')"/>
                                                                        
                                    <select class="text-black" name="town">
                                        <option class="text-blue-600">--Please Choose an option--</option>
                                        @foreach ($towndata as $row2a)
                                            <option class="text-blue-500" value="{{ $row2a->id }}">{{ $row2a->name }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('town')" class="mt-2" />
                                </div> --}}
                                
                                <div style="padding: 10px;">
                                    <x-input-label  for="position" :value="__('Position')"/>                                                                        
                                    
                                        @foreach ($posdata as $row3)                                            
                                            <label class="text-blue-500 p-1" value="{{ $row3->id }}">{{ $row3->name }}</label>
                                            <x-text-input  type="radio" name="position" value="{{ $row1->id }}" required autofocus autocomplete="position" />
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('position')" class="mt-2" />
                                </div>
                
                                <div style="padding: 10px;">
                                    <x-input-label for="photo" :value="__('Photo')"/>                                    
                                    <x-text-input accept="image/*" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" autofocus autocomplete="photo" />
                                </div>

                                <div style="padding: 10px;">
                                    <x-input-label for="latitude" :value="__('Latitude')"/>                                    
                                    <x-text-input  id="latitude" step="0.000000000000001" class="block mt-1 w-full" type="number" name="latitude" :value="old('latitude')"  autofocus autocomplete="latitude" />
                                    <x-input-label for="longitude" :value="__('Longitude')"/>                                    
                                    <x-text-input id="longitude" step="0.000000000000001" class="block mt-1 w-full" type="number" name="longitude" :value="old('longitude')"  autofocus autocomplete="longitude" />

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
        

        
