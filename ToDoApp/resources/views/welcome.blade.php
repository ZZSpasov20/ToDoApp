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

                            @if($listItems->isEmpty())
                                <p class="text-textColor font-bold">Add new task</p>
                            @else
                                @foreach($listItems as $listItem)

                                    <div class="flex gap-x-3 items-center text-textColor ">
                                        @if($listItem->is_complete)
                                            <form action="{{route('markAsIncomplete', $listItem->id)}}" method="post" accept-charset="UTF-8"  class="flex gap-x-3 items-center text-textColor">
                                                {{csrf_field()}}
                                                <button type="submit"  class="w-3 h-3 bg-accent border-2 border-accent border-solid rounded-full"></button>
                                                <p class="text-lg line-through">{{$listItem->name}}</p>
                                            </form>
                                            <form action="{{route('deleteItem', $listItem->id)}}" method="post" accept-charset="UTF-8" >
                                                {{csrf_field()}}
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-4 h-4 text-textColor fill-textColor" viewBox="0 0 24 24">
                                                        <path d="M 10 2 L 9 3 L 4 3 L 4 5 L 5 5 L 5 20 C 5 20.522222 5.1913289 21.05461 5.5683594 21.431641 C 5.9453899 21.808671 6.4777778 22 7 22 L 17 22 C 17.522222 22 18.05461 21.808671 18.431641 21.431641 C 18.808671 21.05461 19 20.522222 19 20 L 19 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 7 5 L 17 5 L 17 20 L 7 20 L 7 5 z M 9 7 L 9 18 L 11 18 L 11 7 L 9 7 z M 13 7 L 13 18 L 15 18 L 15 7 L 13 7 z"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{route('markAsComplete', $listItem->id)}}" method="post" accept-charset="UTF-8"  class="flex gap-x-3 items-center text-textColor">
                                                {{csrf_field()}}
                                                <button class="w-3 h-3 bg-transparent border-2 border-accent border-solid rounded-full"></button>
                                                <p class="text-lg">{{$listItem->name}}</p>
                                            </form>
                                            <form action="{{route('deleteItem', $listItem->id)}}" method="post" accept-charset="UTF-8" >
                                                {{csrf_field()}}
                                                <button type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-4 h-4 text-textColor fill-textColor" viewBox="0 0 24 24">
                                                        <path d="M 10 2 L 9 3 L 4 3 L 4 5 L 5 5 L 5 20 C 5 20.522222 5.1913289 21.05461 5.5683594 21.431641 C 5.9453899 21.808671 6.4777778 22 7 22 L 17 22 C 17.522222 22 18.05461 21.808671 18.431641 21.431641 C 18.808671 21.05461 19 20.522222 19 20 L 19 5 L 20 5 L 20 3 L 15 3 L 14 2 L 10 2 z M 7 5 L 17 5 L 17 20 L 7 20 L 7 5 z M 9 7 L 9 18 L 11 18 L 11 7 L 9 7 z M 13 7 L 13 18 L 15 18 L 15 7 L 13 7 z"></path>
                                                    </svg>
                                                </button>
                                            </form>

                                        @endif


                                    </div>

                                @endforeach
                            @endif

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
