<x-app-layout>
    <x-slot name="header">{{ $quiz->title }}Create New Question for</x-slot>
    
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('questions.store', $quiz->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Question</label>
                    <textarea name="question" class="form-control mt-1 mb-2" value="" id="" rows="4">{{ old('question') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Photograph</label>
                    <input type="file" name="image" class="form-control mt-1 mb-2">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">1. Answer</label>
                            <textarea name="answer1" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ old('answer1') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">2. Answer</label>
                            <textarea name="answer2" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ old('answer2') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">3. Answer</label>
                            <textarea name="answer3" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ old('answer3') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">4. Answer</label>
                            <textarea name="answer4" class="form-control mt-1 mb-2" value="" id="" rows="2">{{ old('answer4') }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Correct answer</label>
                    <select name="correct_answer" id="" class="form-control mb-2 mt-2">
                        <option @if(old('correct_answer')=== 'answer1') selected @endif value="answer1">1. Answer</option>
                        <option @if(old('correct_answer')=== 'answer2') selected @endif value="answer2">2. Answer</option>
                        <option @if(old('correct_answer')=== 'answer3') selected @endif value="answer3">3. Answer</option>
                        <option @if(old('correct_answer')=== 'answer4') selected @endif value="answer4">4. Answer</option>
                    </select>
                </div>

                <div class="form-group d-grid gap-2">
                    <button class="btn btn-success btn-sm " type="submit">Create Question</button>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>