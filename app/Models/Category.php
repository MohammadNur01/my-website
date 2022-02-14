<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

// Post::create([
//     'title' => 'Post 3',
//     'category_id' => 2,
//     'author' => 'Mohammad Nuraini',
//     'slug' => 'post-3',
//     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, illo culpa minus debitis vero veniam similique cumque dolor',
//     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, illo culpa minus debitis vero veniam similique cumque dolor quisquam suscipit necessitatibus, natus incidunt maxime veritatis ipsam nostrum mollitia nemo architecto beatae. Fugit nulla, labore inventore distinctio architecto nemo maiores tempore quasi magnam voluptatum aliquam nesciunt sit optio beatae commodi consequatur non rerum mollitia maxime fugiat eligendi aperiam adipisci sequi. Amet est quis pariatur adipisci, accusantium eveniet debitis odio cupiditate asperiores praesentium repudiandae distinctio quidem animi, corrupti tempore. Itaque porro ullam quia eligendi consequatur aut, libero ratione mollitia saepe et error iste possimus ducimus ipsa numquam dolorum atque id culpa quae a iusto! Ut fugiat accusamus aspernatur illum voluptatem eius provident deserunt totam ratione, fugit possimus omnis, vitae vero maiores iure. </p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo temporibus at hic assumenda deleniti eaque aperiam accusamus odio fugiat error vitae ad quasi nisi impedit voluptas facilis aliquid facere eum, dolores distinctio ullam blanditiis iure! Enim blanditiis earum doloremque nam.</p> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni nobis iusto placeat officia est velit, molestiae sed eaque, doloribus ab sequi nemo quia consectetur suscipit saepe ipsam tenetur ullam eos, rerum aliquam.</p>'
// ])