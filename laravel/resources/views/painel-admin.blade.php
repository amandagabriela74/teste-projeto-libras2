<x-app-layout>
    <x-slot name="header">

    <div>
      <a href="{{ route('cursos-create')}}"> Adicionar novo curso</a>
    </div>  
    </x-slot>
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem dos cursos</h1>
    <div class="w-full divide-y divide-gray-200">
    <table class="w-full divide-y divide-gray-200">
        <thead class="bg-gray-200">
          <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col">id</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Título</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Tópico</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Embed</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider" scope="col" scope="col">Descrição</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach(\App\Models\Curso::all() as $curso)
          <tr>
                <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$curso->id}}</th>
                <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$curso->topico}}</th>
                <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$curso->embed}}</th>
                <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">{{$curso->descricao}}</th>
                <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                    
                  <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded" href="{{route('cursos-edit',['id'=>$curso->id])}}">Editar</a>  
                  <form action="{{route('cursos-destroy',['id'=>$curso->id])}} method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Deletar</button>
                  </form>
                </th>
          </tr>
          @endforeach
        </tbody>
      </table>
      </div>

</x-app-layout>
