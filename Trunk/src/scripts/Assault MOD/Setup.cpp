#include "StdAfx.h"
#include "Setup.h"
#include <ScriptSetup.h>


extern "C" SCRIPT_DECL uint32 _exp_get_script_type()
{
	return SCRIPT_TYPE_MISC;
}

extern "C" SCRIPT_DECL void _exp_script_register(ScriptMgr* mgr)
{
//	SetupAssaultMod(mgr);
	RegisterAIDPSTower( mgr );
	RegisterAISupportTower( mgr );
	RegisterAITankTower( mgr );
	RegisterAIDummyTower( mgr );
	SetupTowerSpawnGossip( mgr );
}

#ifdef WIN32

BOOL APIENTRY DllMain( HANDLE hModule, DWORD  ul_reason_for_call, LPVOID lpReserved )
{
    return TRUE;
}

#endif
