import { useEffect, useState } from 'react'

export default function ScrollToTopButton() {
  const [visible, setVisible] = useState(false)

  useEffect(() => {
    const onScroll = () => {
      setVisible(window.scrollY > 300)
    }

    onScroll()
    window.addEventListener('scroll', onScroll, { passive: true })
    return () => window.removeEventListener('scroll', onScroll)
  }, [])

  const handleClick = () => {
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches

    window.scrollTo({
      top: 0,
      behavior: reduceMotion ? 'auto' : 'smooth',
    })

    const topTarget =
      document.querySelector('#site-header a, header a, [href="#main-content"], body')

    if (topTarget && typeof topTarget.focus === 'function') {
      setTimeout(() => topTarget.focus(), reduceMotion ? 0 : 300)
    }
  }

  return (
    <button
      type="button"
      onClick={handleClick}
      aria-label="Back to top"
      className={[
        'fixed bottom-6 right-6 z-1100',
        'flex h-12 w-12 items-center justify-center',
        'rounded-md bg-[#0b396b] text-white shadow-lg',
        'transition-all duration-300 hover:bg-[#07264a] hover:-translate-y-1',
        'focus:outline-none focus:ring-2 focus:ring-[#f5b018] focus:ring-offset-2',
        visible
          ? 'translate-y-0 opacity-100 pointer-events-auto'
          : 'translate-y-3 opacity-0 pointer-events-none',
      ].join(' ')}
    >
      <svg
        className="h-5 w-5"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        strokeWidth="2"
        aria-hidden="true"
      >
        <path strokeLinecap="round" strokeLinejoin="round" d="M5 15l7-7 7 7" />
      </svg>
    </button>
  )
}