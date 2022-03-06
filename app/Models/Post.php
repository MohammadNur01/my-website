<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ??  false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' .
                    $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas(
                'author',
                fn ($query) =>
                $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

// Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quis sequi fugiat minima aut, labore sint nulla alias veritatis eius minus sunt debitis saepe id, animi cumque totam dolor aspernatur aperiam, veniam aliquam in vero provident maxime. Minima magnam odit dolor harum sint doloremque explicabo dolorum sit perspiciatis odio necessitatibus unde, commodi nihil? Similique dolorem magnam perspiciatis natus, aliquid officia sapiente eligendi fugit incidunt alias eum laboriosam. 
// Ea illo natus dolores facere error quo nesciunt aperiam minus laboriosam mollitia, dignissimos sapiente at necessitatibus tempore nobis possimus deserunt cum molestias dolorum consequatur eaque excepturi dolorem! Eius iure quam laborum nulla vitae pariatur tempore id, veritatis, autem voluptas unde ratione natus voluptatum, sit laboriosam obcaecati doloribus a quo soluta nihil? 
// Cupiditate autem numquam, assumenda fuga aliquam tenetur commodi ea! Rerum adipisci sint alias at suscipit, necessitatibus error, facilis obcaecati eveniet odit velit, recusandae magnam mollitia labore similique! Laudantium, eveniet. A commodi eius beatae, accusamus velit porro omnis perspiciatis sunt sed amet accusantium vero blanditiis consequuntur quibusdam suscipit eveniet at perferendis laboriosam quisquam in animi magni sequi debitis qui! Vel odio fuga suscipit nisi nam, commodi dolor rerum atque maiores! Dolorem, nisi perferendis molestias maiores eaque iste repellat numquam consectetur, ipsum necessitatibus voluptas!