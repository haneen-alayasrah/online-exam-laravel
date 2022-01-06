<x-app-layout>
    <x-slot name="header"> {{ $quiz->title }}Quiz questions</x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-start">
                <a href="{{route('quizzes.index')}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Back to Quizzes</a>
            </h5>
            <h5 class="card-title float-end">
                <a href="{{route('questions.create', $quiz->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Create Question</a>
            </h5>
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th scope="col">Question</th>
                        <th scope="col">Photograph</th>
                        <th scope="col">1. Answer</th>
                        <th scope="col">2. Answer</th>
                        <th scope="col">3. Answer</th>
                        <th scope="col">4. Answer</th>
                        <th scope="col" >Correct answer</th>
                        <th scope="col" style="width:90px">Transactions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quiz->questions as $question )
                    <tr>
                        <td>{{ $question->question }}</td>
                        <td>
                            @if ($question->image)
                                <a href="{{ asset($question->ithestiflermage) }}" class="btn btn-sm btn-light" target="_blank">view</a>
                                
                            @endif
                        </td>
                        <td>{{ $question->answer1 }}</td>
                        <td>{{ $question->answer2 }}</td>
                        <td>{{ $question->answer3 }}</td>
                        <td>{{ $question->answer4 }}</td>
                        <td class="text-success">{{ substr($question->correct_answer, -1) }}. answer</td>
                        <td>
                            <a href="{{ route('questions.edit',[$quiz->id,$question->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="{{ route('questions.destroy', [$quiz->id,$question->id]) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</x-app-layout>