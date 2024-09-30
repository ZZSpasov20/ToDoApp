<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>To Do Web App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!--Styles-->
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="bg-backgroundBase">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-accent selection:text-white ">
                <div class="flex flex-col gap-y-4">
                    <div class="bg-accent  px-20  py-4 text-center">
                        <p class="text-backgroundElevated text-lg font-bold">Website To Do</p>
                    </div>
                    <div class="flex flex-col px-16 py-6 bg-backgroundElevated relative gap-y-7 ">
                        <div class="flex flex-col justify-center items-start">
                            @foreach($listItems as $listItem)
                                <div class="flex gap-x-3 items-center text-textColor ">
                                    @if($listItem->is_complete)
                                        <form action="{{route('markAsIncomplete', $listItem->id)}}" method="post" accept-charset="UTF-8"  class="flex gap-x-3 items-center text-textColor">
                                            {{csrf_field()}}
                                            <button type="submit"  class="w-3 h-3 bg-accent border-2 border-accent border-solid rounded-full"></button>
                                            <p class="text-lg line-through">{{$listItem->name}}</p>
                                        </form>

                                    @else
                                        <form action="{{route('markAsComplete', $listItem->id)}}" method="post" accept-charset="UTF-8"  class="flex gap-x-3 items-center text-textColor">
                                            {{csrf_field()}}
                                            <button class="w-3 h-3 bg-transparent border-2 border-accent border-solid rounded-full"></button>
                                            <p class="text-lg">{{$listItem->name}}</p>
                                        </form>

                                    @endif

                                </div>

                            @endforeach
                        </div>
                        <form action="{{route('saveItem')}}" method="post" accept-charset="UTF-8" class="flex flex-col justify-center items-center gap-y-4 " >
                            {{csrf_field()}}
                            <input type="text" name="listItem" class="border-solid border-2 border-accent focus:ring-0 focus:outline-none focus:text-textColor text-textColor focus:ring-offset-0 " placeholder="New task" required>
                            <button type="submit" class="bg-accent text-backgroundElevated px-6 py-2 rounded-xl font-bold  flex ">+ New task</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
