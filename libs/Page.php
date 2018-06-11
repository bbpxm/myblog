<?php
namespace libs;

class Page {
	protected $total;
	protected $num;
    protected $c;
	protected $a;
	protected $pages; //总页数
	protected $p; //当前页
    protected $links;//链接str
	/**
	 * @param int $total 数据总个数
	 * @param int $num   每页显示的个数
	 */
	public function __construct($total, $num,$c,$a) {
		$this->total = $total;
		$this->num = $num;
        $this->c=$c;
		$this->a=$a;
		$this->links="?c={$c}&a={$a}&";
		$this->pages = ceil($total / $num);
		$this->p = $_GET['p'] ?? 1;
	}

	public function showFirstPage() {
		if ($this->p != 1) {
			return '<a href="'.$this->links.'p=1" class="first">首页</a>';
		} else {
			return '<span class="first dis">首页</span>';
		}
	}

	//上一页
	public function showPrevPage() {
		$p = $this->p;

		if ($p > 1) {
			return  '<a href="'.$this->links. 'p='.($p - 1) .'" class="prev">上一页</a>';
		} else {
			return '<span class="prev dis">上一页</span>';
		}
	}

	public function showMidPage() {
		$str_no='';
		$p = $this->p;
		$pages = $this->pages;

		//保证最多10个页号, 极限值
		$min = $p - 5; // 左侧最小值是 当前页-5
		$max = $p + 4; // 右侧最大值是 当前页+4

		if ($min < 1) {
			$min = 1;
			//右侧最大值,应该是 10和总页数中取小的
			$max = min(10, $pages); //两者中取得较小的那个
		}

		if ($max > $pages) {
			$max = $pages;
			//最小页数 应该在 1 和 .. 之间取大的
			$min = max($pages - 9, 1);
		}

		for ($i = $min; $i <= $max; $i++) {
			if ($p == $i) {
				$str_no.=' <span class="no current">' . $i . '</span> ';
			} else {
				$str_no.= ' <a href="'.$this->links.'p=' . $i.'" class="no"><i>' . $i . '</i></a> ';
			}
		}
		return $str_no;
	}

	public function showNextPage() {
		$p = $this->p;
		$pages = $this->pages;

		if ($p < $pages) {
			return '<a href="'.$this->links . 'p='.($p + 1) . '" class="next">下一页</a>';
		} else {
			return '<span class="next dis">下一页</span>';
		}
	}

	public function showLastPage() {
		$p = $this->p;
		$pages = $this->pages;

		if ($p != $pages) {
			return '<a href="'.$this->links .'p='.$pages.'" class="last">末页</a>';
		} else {
			return '<span class="last dis">末页</span>';
		}
	}

	public function show() {
		//1.输出首页字符串
		return "{$this->showFirstPage()}{$this->showPrevPage()}"."{$this->showMidPage()}{$this->showNextPage()}{$this->showLastPage()}";
//       return $this->showMidPage();
	}
}