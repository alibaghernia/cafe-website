<?php

// app/graphql/types/CategoryType

namespace App\GraphQL\Types;

use App\Models\Event;
use GraphQL\Type\Definition\Type;
// use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class EventType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Event',
        'description' => 'Collection of events',
        'model' => Event::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'ID of quest'
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of the quest'
            ],
            // 'quests' => [
            //     'type' => Type::listOf(GraphQL::type('Quest')),
            //     'description' => 'List of quests'
            // ]
        ];
    }
}
