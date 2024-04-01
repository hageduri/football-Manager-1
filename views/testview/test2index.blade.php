<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List of Players') }}       
            
                <x-secondary-button class="ms-20">                     
                    <a href="{{ route('dashboard') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Back</a>                                               
                </x-secondary-button>
                <x-secondary-button class="ms-10">                     
                    <a href="{{ route('test2index') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Refresh</a>
                </x-secondary-button>
            
        </h2>
        
    </x-slot>       
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-900">
                    
                    
                    <div>
                        
                        <table class="table" style="display: block; overflow-x: auto; white-space: nowrap;">
                        
                        
                            <thead class="thead-dark">
                              <tr>
                                                               
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Test2_id</th>
                                <th scope="col">Gender</th>
                                <th scope="col">District</th>
                                <th scope="col">Town</th>
                                <th scope="col">Position</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitude</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            @foreach ($test2s as $test2)
                            <tbody>
                                
                                <tr class="text-black">
                                    <td  class="text-black" scope="row">{{ $i++ }}</td>
                                    <td>{{ $test2['name'] }} </td>
                                    <td>{{ $test2['test2_id'] }} </td>                                
                                    <td>{{ $gens[($test2->gender)-1]->name }} </td>                                
                                    <td>{{ $dist[($test2->district)-1]->name }} </td>
                                    <td>{{ $town[($test2->town)-1]->name }} </td>
                                    <td>{{ $pos[($test2->position)-1]->name }} </td>
                                    
                                    <td> 
                                        <img src="{{ asset($test2->photo) }}" style="width: 70px;
                                        height:70px" alt="Img"/>    
                                    </td>
                                    
                                    <td>{{ $test2['latitude'] }}</td>
                                    <td>{{ $test2['longitude'] }}</td>
                                    <td>
                                        <div style="padding: 10px;">
                                            <x-danger-button class="ms-3">
                                                <a href={{"test2delete/".$test2['id'] }}>Delete</a>                                            
                                            </x-danger-button>
                                            <x-green-button class="ms-3">
                                                
                                                <a href={{"test2Update/".$test2['id'] }}>Edit </a>
                                            </x-green-button>
                                        </div>
                                        
                                        
                                        
                                    </td>
                                    
                                </tr>
                            
                              
                             
                            </tbody>
                            @endforeach      
                          </table>                                               
                        
                        <div style="padding: 10px;">
                            <x-primary-button class="ms-3">
                              
                            <a href="{{ route('test2insertpage') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Add Players</a>
                            </x-primary-button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


