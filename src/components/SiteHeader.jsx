import { useState, useRef, useEffect } from 'react'

const wp = window.__WP__ || {
  site_url: '/',
  site_name: 'Advantage Marine',
  logo_url: '',
  menu_items: [],
}

function DropdownMenu({ items, depth = 0 }) {
  return (
    <ul className={`
      absolute bg-white shadow-lg min-w-48 z-50 py-1
      ${depth === 0 ? 'top-full left-0' : 'top-0 left-full'}
    `}>
      {items.map(item => (
        <DropdownItem key={item.id} item={item} depth={depth} />
      ))}
    </ul>
  )
}

function DropdownItem({ item, depth }) {
  const [open, setOpen] = useState(false)
  const [openLeft, setOpenLeft] = useState(false)
  const itemRef = useRef(null)
  const hasChildren = item.children?.length > 0

  useEffect(() => {
    if (!open || !hasChildren || !itemRef.current) return

    const rect = itemRef.current.getBoundingClientRect()
    const submenuWidth = 260
    const spaceRight = window.innerWidth - rect.right
    setOpenLeft(spaceRight < submenuWidth)
  }, [open, hasChildren])

  return (
    <li
      ref={itemRef}
      className="relative"
      onMouseEnter={() => setOpen(true)}
      onMouseLeave={() => setOpen(false)}
    >
      <a
        href={item.url}
        className="flex items-center justify-between gap-4 px-4 py-2 text-sm text-[#2c3e50] hover:text-[#f5b018] hover:bg-gray-50 whitespace-nowrap transition-colors"
      >
        <span>{item.title}</span>
        {hasChildren && (
          <svg
            className={`w-3 h-3 opacity-60 ${openLeft ? 'rotate-180' : ''}`}
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
          </svg>
        )}
      </a>

      {hasChildren && open && (
        <ul
          className={`absolute top-0 min-w-[260px] bg-white shadow-lg z-50 py-1 ${
            openLeft ? 'right-full' : 'left-full'
          }`}
        >
          {item.children.map(child => (
            <DropdownItem key={child.id} item={child} depth={depth + 1} />
          ))}
        </ul>
      )}
    </li>
  )
}

function MobileMenuItem({ item, depth = 0 }) {
  const [open, setOpen] = useState(false)
  const hasChildren = item.children?.length > 0

  return (
    <li>
      <div className="flex items-center justify-between">
        <a
          href={item.url}
          className="flex-1 py-2 text-sm font-medium text-[#2c3e50] hover:text-[#f5b018] transition-colors"
          style={{ paddingLeft: `${(depth + 1) * 1}rem` }}
        >
          {item.title}
        </a>
        {hasChildren && (
          <button
            onClick={() => setOpen(!open)}
            className="p-2 text-[#0b396b]"
            aria-label="Toggle submenu"
          >
            <svg
              className={`w-4 h-4 transition-transform ${open ? 'rotate-180' : ''}`}
              fill="none" stroke="currentColor" viewBox="0 0 24 24"
            >
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
            </svg>
          </button>
        )}
      </div>
      {hasChildren && open && (
        <ul className="border-l-2 border-[#f5b018]/30 ml-4">
          {item.children.map(child => (
            <MobileMenuItem key={child.id} item={child} depth={depth + 1} />
          ))}
        </ul>
      )}
    </li>
  )
}

export default function SiteHeader() {
  const [mobileOpen, setMobileOpen] = useState(false)
  const navRef = useRef(null)
  useEffect(() => {
    function handleClick(e) {
      if (navRef.current && !navRef.current.contains(e.target)) {
        setMobileOpen(false)
      }
    }
    document.addEventListener('mousedown', handleClick)
    return () => document.removeEventListener('mousedown', handleClick)
  }, [])

  return (
    <>
      <div className="hidden md:flex bg-[#07264a] text-gray-300 text-xs px-[5%] py-2.5 justify-between items-center">
        <div className="flex gap-5 flex-wrap">
          <span>
            <i className="fas fa-envelope text-[#f5b018] mr-1.5" />
            sales@advantagemarine.com.my
          </span>
          <span>
            <i className="fas fa-phone-alt text-[#f5b018] mr-1.5" />
            +60 7 559 5557 &nbsp;|&nbsp; +65 9299 3030 Victor
          </span>
        </div>
        <div>
          <i className="fas fa-globe text-white cursor-pointer" />
          <span className="ml-1.5">English</span>
        </div>
      </div>
      <header ref={navRef} className="bg-white sticky top-0 z-1000 shadow-md">
        <div className="flex items-center justify-between px-[5%] py-5">
          <a href={wp.site_url} className="flex items-center gap-2.5 no-underline">
            {/* {wp.logo_url ? (
              <img
                src={wp.logo_url}
                alt={wp.site_name}
                className="h-10 w-auto"
                loading="eager"
              />
            ) : (
              <div className="flex items-center gap-2">
                <div className="flex">
                  <div className="w-2 h-6 bg-[#f5b018] -skew-x-12 mr-1" />
                  <div className="w-2 h-6 bg-[#0b396b] -skew-x-12 mr-1" />
                  <div className="w-2 h-6 bg-[#8da1b9] -skew-x-12" />
                </div>
                <span className="text-lg font-bold text-[#0b396b] uppercase tracking-wide">
                  {wp.site_name}
                </span>
              </div>
            )} */}
            <div className="flex items-center gap-2">
                <div className="flex">
                  <div className="w-2 h-6 bg-[#f5b018] -skew-x-12 mr-1" />
                  <div className="w-2 h-6 bg-[#0b396b] -skew-x-12 mr-1" />
                  <div className="w-2 h-6 bg-[#8da1b9] -skew-x-12" />
                </div>
                <span className="text-lg font-bold text-[#0b396b] uppercase tracking-wide">
                  {wp.site_name}
                </span>
              </div>
          </a>
          <nav className="hidden lg:flex items-center gap-6">
            {wp.menu_items.map(item => (
              <DesktopNavItem key={item.id} item={item} />
            ))}
          </nav>
          <button
            className="lg:hidden p-2 text-[#0b396b] border-none bg-transparent cursor-pointer"
            onClick={() => setMobileOpen(!mobileOpen)}
            aria-label="Toggle menu"
          >
            {mobileOpen
              ? <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M6 18L18 6M6 6l12 12" /></svg>
              : <svg className="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M4 6h16M4 12h16M4 18h16" /></svg>
            }
          </button>
        </div>
        {mobileOpen && (
          <div className="lg:hidden border-t border-gray-100 bg-white px-[5%] pb-4">
            <ul className="divide-y divide-gray-100">
              {wp.menu_items.map(item => (
                <MobileMenuItem key={item.id} item={item} />
              ))}
            </ul>
          </div>
        )}
      </header>
    </>
  )
}

function DesktopNavItem({ item }) {
  const [open, setOpen] = useState(false)
  const hasChildren = item.children?.length > 0

  return (
    <div
      className="relative"
      onMouseEnter={() => setOpen(true)}
      onMouseLeave={() => setOpen(false)}
    >
      <a
        href={item.url}
        className="flex items-center gap-1 text-sm font-medium text-[#2c3e50] hover:text-[#f5b018] transition-colors"
      >
        {item.title}
        {hasChildren && (
          <svg
            className={`w-3 h-3 transition-transform ${open ? 'rotate-180' : ''}`}
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M19 9l-7 7-7-7" />
          </svg>
        )}
      </a>

      {hasChildren && open && (
        <ul className="absolute top-full left-0 min-w-[260px] bg-white shadow-lg z-50 py-1">
          {item.children.map(child => (
            <DropdownItem key={child.id} item={child} depth={0} />
          ))}
        </ul>
      )}
    </div>
  )
}