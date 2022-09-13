<?php

namespace App\DataTransferObjects;

use Spatie\LaravelData\Data;

class CreateTestData extends Data
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly string $description,
        public readonly ?string $created_at,
        public readonly ?string $updated_at,
    ) {}

    public static function rules(): array
    {
        return [
            'name' => 'required|max:100',
            'description' => 'required|max:255'
        ];
    }
}

//
//namespace App\Domain\Tests\DataTransferObjects;
//
//use App\Http\Requests\CreateTestRequest;
//use Spatie\LaravelData\Data;
//
//class CreateTestData
//{
//    public function __construct(
//        public readonly string $name,
//        public readonly string $description,
//    )
//    {
//    }
//
//    public static function fromRequest(CreateTestRequest $request): CreateTestData
//    {
//        return new self(
//            $request->input('name'),
//            $request->input('description')
//        );
//    }
//
//    public function toArray(): array
//    {
//        return (array)$this;
//    }
//}
