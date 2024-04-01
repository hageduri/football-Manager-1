<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">                                        
                <x-secondary-button class="ms-3">
          
                <a href="{{ route('test1index') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Test1 List of Players</a>
                </x-secondary-button>
                <x-secondary-button class="ms-3">
                  
                <a href="{{ route('test1insertpage') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Test1 Add Players</a>
                </x-secondary-button>                    
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <x-secondary-button class="ms-3">
                    <a href="{{ route('test2index') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Test2 List of Players</a>
                    </x-secondary-button>
                    <x-secondary-button class="ms-3">
                      
                    <a href="{{ route('test2insertpage') }}" class="block font-medium text-sm text-black-900 dark:text-black-800">Test2 Add Players</a>
                    </x-secondary-button>
            </div>
        </div>
    </div>
</div>


