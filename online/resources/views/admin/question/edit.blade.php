<x-app-layout>
    <x-slot name="header">{{ $question->question }} Edit</x-slot>
    
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('questions.update', [$question->quiz_id, $question->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Question</label>
                    <textarea name="question" class="form-control mt-1 mb-2" value="" id="" rows="4">{{ $question->question }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Photograph</label>
                    @if ($question->image)
                    <a href="{{asset($question->image)}}" target="_blank">
                        <img src="{{asset($question->image)}}" alt="" style="width: 200px">
                        </a>
                    @endif
                    <input type="file" name="image" class="form-control mt-1 mb-2">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">1. Answer</label>
                            <textarea name="answer1" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ $question->answer1 }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">2. Answer</label>
                            <textarea name="answer2" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ $question->answer2 }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">3. Answer</label>
                            <textarea name="answer3" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ $question->answer3 }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">4. Answer</label>
                            <textarea name="answer4" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ $question->answer4 }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Correct answer</label>
                    <select name="correct_answer" id="" class="form-control mb-2 mt-2">
                        <option @if($question->correct_answer)=== 'answer1') selected @endif value="answer1">1. Answer</option>
                        <option @if($question->correct_answer)=== 'answer2') selected @endif value="answer2">2. Answer</option>
                        <option @if($question->correct_answer)=== 'answer3') selected @endif value="answer3">3. Answer</option>
                        <option @if($question->correct_answer)=== 'answer4') selected @endif value="answer4">4. Answer</option>
                    </select>
                </div>

                <div class="form-group d-grid gap-2">
                    <button class="btn btn-success btn-sm " type="submit">Update Question</button>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>